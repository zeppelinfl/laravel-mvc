<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $this->event = new Event;
        $this->type = new Type;
    }

    /**
     * List places on places page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = $this->event->get();
        foreach ($events as $key => $value) {
            $events[$key]['type'] = $this->type->where('id', $value->type_id)->first();
        }
        return view('event.index', ['events' => $events]);
    }

    /**
     * Show place by id.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $event = $this->event->whereId($id)->first();
        return view('event.view', ['event' => $event]);
    }
}
