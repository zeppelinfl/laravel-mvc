<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subcategory;

class SubcategoriesController extends Controller
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
        $subcategory = new Subcategory;
        return view('admin.subcategory.index', ['subcategories' => $subcategory->get()]);
    }

    /**
     * Create countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {

        return view('admin.subcategory.create');   
    }

    /**
     * Edit countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $subcategory = new Subcategory;
        return view('admin.subcategory.edit', ['subcategory' => $subcategory->where('id', '=', $id)->first()]);   
    }

    /**
     * Delete countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $subcategory = new Subcategory;
        $subcategory->where('id', '=', $id)->delete();
        return redirect()->route('subcategoryA');
    }

    /**
     * Create countries process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
       
        $subcategory = new Subcategory;
        if($request->id != '') {
            $subcategory = $subcategory->find($request->id);
            $subcategory->id = $request->id; 
        }
        $subcategory->name = $request->name;
        $subcategory->save();
        return redirect()->route('subcategoryA');
    }


}
