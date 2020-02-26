<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Country;

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
    }

    /**
     * Show searched data.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $city = new City;
        $data = [
            'cities' => $city->get(),
        ];
        return view('search.index');
    }

    /**
     * Find searched data.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function find(Request $request)
    {
        $city = new City;
        $country = new Country;
        $city_data = $city->whereId($request->location)->first();
        $country_data = $country->whereId($city_data->country_id)->first();
        $data = [
            'city' => $city_data,
            'country' => $country_data,
        ];
        dd($country_data);
    }
}
