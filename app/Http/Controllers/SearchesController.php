<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Country;
use App\Models\Event;
use App\Models\Experience;
use App\Models\Place;

class SearchesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->city = new City;
        $this->country = new Country;
        $this->event = new Event;
        $this->experience = new Experience;
        $this->place = new Place;
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
            $data['events'] = $this->event->whereId($city_data->id)->get();
            $data['places'] = $this->place->whereId($city_data->id)->get();
            if($city_data->country_id > 0) {
                $data['experiences'] = $this->experience->whereId($city_data->country_id)->get();
            }
        }
        return view('search.index', $data);
    }

}
