<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Place;
use App\Models\Subcategory;

class PlacesController extends Controller
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
     * List Places.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $place = new Place;
        $places = $place->get();
        $city = new City;
        $subcategory = new Subcategory;
        foreach ($places as $key => $value) {
            $places[$key]['city_name'] = $city->whereId($value->city_id)->first();
            $places[$key]['subcategory_name'] = $subcategory->whereId($value->subcategory_id)->first();
        }
        return view('admin.place.index', ['places' => $places]);
    }

    /**
     * Create place form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $city = new City;
        $subcategory = new Subcategory;
        return view('admin.place.create', ['cities' => $city->select('id', 'name')->get(), 'subcategories' => $subcategory->select('id', 'name')->get()]);   
    }

    /**
     * Edit place form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $place = new Place;
        $city = new City;
        $subcategory = new Subcategory;
        return view('admin.place.edit', ['place' => $place->where('id', '=', $id)->first(), 'cities' => $city->select('id', 'name')->get(), 'subcategories' => $subcategory->select('id', 'name')->get()]);   
    }

    /**
     * View place.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $place = new Place;
        $city = new City;
        $subcategory = new Subcategory;
        return view('admin.place.view', ['place' => $place->where('id', '=', $id)->first(), 'cities' => $city->select('id', 'name')->get(), 'subcategories' => $subcategory->select('id', 'name')->get()]);   
    }

    /**
     * Delete place.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $place = new Place;
        $place->where('id', '=', $id)->delete();
        return redirect()->route('placeA');
    }

    /**
     * Create/Update place process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        
        $place = new Place;
        if($request->id != '') {
            $place = $place->find($request->id);
            $place->id = $request->id; 
        }

        if($request->image != '') {
            $request->image->store('public/places');
            $place->image = $request->image->hashName();
        }

        $place->name = $request->name;
        $place->open = $request->open;
        $place->close = $request->close;
        $place->address = $request->address;
        $place->review_count = $request->review_count;
        $place->review_score = $request->review_score;
        $place->subcategory_id = $request->subcategory_id;
        $place->city_id = $request->city_id;
        $place->save();
        return redirect()->route('placeA');
    }


}
