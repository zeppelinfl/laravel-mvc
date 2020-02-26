<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $city = new City;
        $data = [
            'cities' => $city->get(),
        ];
        return view('home', $data);
    }
}
