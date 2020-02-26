<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;

class SearchController extends Controller
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
    public function find()
    {
        $city = new City;
        $data = [
            'cities' => $city->get(),
        ];
        dd('here');
    }
}
