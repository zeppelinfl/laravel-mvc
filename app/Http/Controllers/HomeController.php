<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Category;
use App\Models\Place;
use App\Models\Subcategory;
use App\Models\Page;
use App\Models\Review;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->city = new City;
        $this->category = new Category;
        $this->place = new Place;
        $this->subcategory = new Subcategory;
        $this->page = new Page;
        $this->review = new Review;
        $this->user = new User;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'cities' => $this->city->get(),
            'categories' => $this->category->get(),
            'page' => $this->page->whereId(1)->first(),
        ];
        $places = $this->place->get();
        foreach ($places as $key => $value) {
            $places[$key]['subcategory'] = $this->subcategory->where('id', $value->subcategory_id)->first();
        }
        $data['places'] = $this->place->formatTime($places);
        $reviews = $this->review->get();
        foreach($reviews as $key => $value) {
            $reviews[$key]['user'] = $this->user->where('id', $value->user_id)->first();
        }
        $data['reviews'] = $reviews;
        return view('home', $data);
    }
}
