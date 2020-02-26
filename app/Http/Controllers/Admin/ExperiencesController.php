<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Country;
use App\Models\City;

class ExperiencesController extends Controller
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
     * List Countries.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $experience = new Experience;
        $experiences = $experience->get();
        $country = new Country;
        $city = new City;
        foreach ($experiences as $key => $value) {
            $experiences[$key]['country_name'] = $country->whereId($value->country_id)->first();
            $experiences[$key]['cities_count'] = $city->where('country_id', '=', $value->country_id)->count();
        }
        return view('admin.experience.index', ['experiences' => $experiences]);
    }

    /**
     * Create countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $country = new Country;
        return view('admin.experience.create', ['countries' => $country->select('id', 'name')->get()]);   
    }

    /**
     * Edit countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $experience = new Experience;
        $country = new Country;
        return view('admin.experience.edit', ['experience' => $experience->where('id', '=', $id)->first(), 'countries' => $country->select('id', 'name')->get()]);   
    }

    /**
     * Delete countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $experience = new Experience;
        $experience->where('id', '=', $id)->delete();
        return redirect()->route('experienceA');
    }

    /**
     * Create countries process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        
        $experience = new Experience;
        if($request->id != '') {
            $experience = $experience->find($request->id);
            $experience->id = $request->id; 
        }

        if($request->image != '') {
            $request->image->store('public/experiences');
            $experience->image = $request->image->hashName();
        }
        $experience->country_id = $request->country_id;
        $experience->save();
        return redirect()->route('experienceA');
    }


}
