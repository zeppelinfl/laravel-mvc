<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Country;

class CountriesController extends Controller
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
        $country = new Country;
        return view('admin.country.index', ['countries' => $country->get()]);
    }

    /**
     * Create country form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {

        return view('admin.country.create');   
    }

    /**
     * Edit country form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $country = new Country;
        return view('admin.country.edit', ['country' => $country->where('id', '=', $id)->first()]);   
    }

    /**
     * View country.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $country = new Country;
        $data = $country->find($id);
        return view('admin.country.view', ['country' => $country->find($id)]);   
    }

    /**
     * Delete country.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $country = new Country;
        $country->where('id', '=', $id)->delete();
        return redirect()->route('countryA');
    }

    /**
     * Create/Update country process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
       
        $country = new Country;
        if($request->id != '') {
            $country = $country->find($request->id);
            $country->id = $request->id; 
        }
        $country->name = $request->name;
        $country->save();
        return redirect()->route('countryA')->with('success', 'Country stored succesfully!');
    }
}
