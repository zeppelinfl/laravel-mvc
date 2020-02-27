<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Country;
use App\Models\Event;
use App\Models\Experience;
use App\Models\Place;
use App\Models\Type;
use App\Models\Subcategory;

class SearchesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->city = new City;
        $this->country = new Country;
        $this->event = new Event;
        $this->experience = new Experience;
        $this->place = new Place;
        $this->type = new Type;
        $this->subcategory = new Subcategory;
    }

    /**
     * Show searched data.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = [];
        $data['search'] = $request->search;
        $city_data = $this->city->whereId($request->location)->first();
        $data['city'] = $city_data;
        if($city_data != '') {
            $data['country'] = $this->country->whereId($city_data->country_id)->first();
            $events = $this->event->where('city_id', $city_data->id)->get();
            foreach ($events as $key => $value) {
                $events[$key]['type'] = $this->type->where('id', $value->type_id)->first();
            }
            $data['events'] = $events;
            $places = $this->place->where('city_id', $city_data->id)->get();
            foreach ($places as $key => $value) {
                $places[$key]['subcategory'] = $this->subcategory->where('id', $value->subcategory_id)->first();
            }
            $data['places'] = $this->place->formatTime($places);
            if($city_data->country_id > 0) {
                $data['experiences'] = $this->experience->where('country_id', $city_data->country_id)->get();
            }
        }
        return view('search.index', $data);
    }
}
