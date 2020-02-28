<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Experience;
use App\Models\City;
use App\Models\Country;

class ExperiencesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->experience = new Experience;
        $this->city = new City;
        $this->country = new Country;
    }

    /**
     * List places on places page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $experiences = $this->experience->get();
        foreach($experiences as $key => $value) {
            $cities = $this->city->where('country_id', $value->country_id)->get();
            $listing = 0;
            foreach ($cities as $city) {
                $listing += $city->listings;
            }
            $experiences[$key]['listings'] = $listing;
            $experiences[$key]['cities'] = count($cities);
            $experiences[$key]['name'] = $this->country->whereId($value->country_id)->first();
        }
        return view('experience.index', ['experiences' => $experiences]);
    }

    /**
     * Show place by id.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $experience = $this->experience->whereId($id)->first();
        $cities = $this->city->where('country_id', $experience->country_id)->get();
        $listing = 0;
        foreach ($cities as $city) {
            $listing += $city->listings;
        }
        $experience['listings'] = $listing;
        $experience['cities'] = count($cities);
        $experience['name'] = $this->country->whereId($experience->country_id)->first();
        $experience['city_list'] = $cities;
        return view('experience.view', ['experience' => $experience]);
    }
}
