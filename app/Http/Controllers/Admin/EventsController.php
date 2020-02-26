<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\City;
use App\Models\Event;
use App\Models\Type;

class EventsController extends Controller
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
     * List Events.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event = new Event;
        $events = $event->get();
        $city = new City;
        $type = new Type;
        foreach ($events as $key => $value) {
            $events[$key]['city_name'] = $city->whereId($value->city_id)->first();
            $events[$key]['type_name'] = $type->whereId($value->type_id)->first();
        }
        return view('admin.event.index', ['events' => $events]);
    }

    /**
     * Create event form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $city = new City;
        $type = new Type;
        return view('admin.event.create', ['cities' => $city->select('id', 'name')->get(), 'types' => $type->select('id', 'name')->get()]);   
    }

    /**
     * Edit event form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $event = new Event;
        $city = new City;
        $type = new Type;
        return view('admin.event.edit', ['event' => $event->where('id', '=', $id)->first(), 'cities' => $city->select('id', 'name')->get(), 'types' => $type->select('id', 'name')->get()]);   
    }

     /**
     * View event.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $event = new Event;
        $city = new City;
        $type = new Type;
        return view('admin.event.view', ['event' => $event->where('id', '=', $id)->first(), 'cities' => $city->select('id', 'name')->get(), 'types' => $type->select('id', 'name')->get()]);   
    }

    /**
     * Delete event.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $event = new Event;
        $event->where('id', '=', $id)->delete();
        return redirect()->route('eventA');
    }

    /**
     * Create/Update event process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        
        $event = new Event;
        if($request->id != '') {
            $event = $event->find($request->id);
            $event->id = $request->id; 
        }

        if($request->image != '') {
            $request->image->store('public');
            $event->image = $request->image->hashName();
        }

        $event->name = $request->name;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->address = $request->address;
        $event->review_count = $request->review_count;
        $event->type_id = $request->type_id;
        $event->city_id = $request->city_id;
        $event->save();
        return redirect()->route('eventA')->with('success', 'Event stored succesfully!');
    }


}
