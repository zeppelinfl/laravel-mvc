<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $this->place = new Place;
        $this->subcategory = new Subcategory;
    }

    /**
     * List places on places page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $places = $this->place->get();
        foreach ($places as $key => $value) {
            $places[$key]['subcategory'] = $this->subcategory->where('id', $value->subcategory_id)->first();
        }
        $places = $this->place->formatTime($places);
        return view('place.index', ['places' => $places]);
    }

    /**
     * Show place by id.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        dd($id);
        $place = $this->page->whereId($id)->get();
        return view('place.view', ['place' => $place]);
    }
}
