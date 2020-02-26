<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;

class CitiesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List Cities.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $city = new City;
        $cities = $city->get();
        $country = new Country;
        foreach ($cities as $key => $value) {
            $country = $country->whereId($value->country_id)->first();
            $cities[$key]['country_name'] = $country->name;
        }
        return view('admin.city.index', ['cities' => $cities]);
    }

    /**
     * Create city form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $country = new Country;
        return view('admin.city.create', ['countries' => $country->select('id', 'name')->get()]);   
    }

    /**
     * Edit city form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $city = new City;
        $country = new Country;
        return view('admin.city.edit', ['city' => $city->where('id', '=', $id)->first(), 'countries' => $country->select('id', 'name')->get()]);   
    }

    /**
     * View city.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $city = new City;
        $country = new Country;
        return view('admin.city.view', ['city' => $city->where('id', '=', $id)->first(), 'countries' => $country->select('id', 'name')->get()]);   
    }

    /**
     * Delete city.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $city = new City;
        $city->where('id', '=', $id)->delete();
        return redirect()->route('cityA');
    }

    /**
     * Create/Update city process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $city = new City;
        if($request->id != '') {
            $city = $city->find($request->id);
            $city->id = $request->id; 
        }
        if($request->listings == '') {
            $request->listings = 0;
        }
        $city->name = $request->name;
        $city->listings = $request->listings;
        $city->country_id = $request->country_id;
        $city->save();
        return redirect()->route('cityA');
    }


}
