<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Event;
use App\Models\Type;
use App\Models\City;
use App\Models\Country;
use App\Models\Category;
use App\Models\Place;
use App\Models\Subcategory;
use App\Models\Page;
use App\Models\Review;
use App\Models\Experience;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->event = new Event;
        $this->type = new Type;
        $this->city = new City;
        $this->country = new Country;
        $this->category = new Category;
        $this->place = new Place;
        $this->subcategory = new Subcategory;
        $this->page = new Page;
        $this->review = new Review;
        $this->user = new User;
        $this->experience = new Experience;
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
            'page_place' => $this->page->whereId(2)->first(),
            'page_review' => $this->page->whereId(3)->first(),
            'page_experience' => $this->page->whereId(4)->first(),
            'page_event' => $this->page->whereId(5)->first(),
            'page_work' => $this->page->whereId(6)->first(),
        ];
        $places = $this->place->take(3)->get();
        foreach ($places as $key => $value) {
            $places[$key]['subcategory'] = $this->subcategory->where('id', $value->subcategory_id)->first();
        }
        $data['places'] = $this->place->formatTime($places);
        $reviews = $this->review->take(3)->get();
        foreach($reviews as $key => $value) {
            $reviews[$key]['user'] = $this->user->where('id', $value->user_id)->first();
        }
        $data['reviews'] = $reviews;
        $experiences = $this->experience->take(4)->get();
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
        $data['experiences'] = $experiences;

        $events = $this->event->take(3)->get();
        foreach ($events as $key => $value) {
            $events[$key]['type'] = $this->type->where('id', $value->type_id)->first();
        }
        $data['events'] = $events;

        return view('home', $data);
    }
}
