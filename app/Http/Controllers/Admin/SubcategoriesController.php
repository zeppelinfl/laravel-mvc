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
     * List Subcategories.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subcategory = new Subcategory;
        return view('admin.subcategory.index', ['subcategories' => $subcategory->get()]);
    }

    /**
     * Create subcategory form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {

        return view('admin.subcategory.create');   
    }

    /**
     * Edit subcategory form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $subcategory = new Subcategory;
        return view('admin.subcategory.edit', ['subcategory' => $subcategory->where('id', '=', $id)->first()]);   
    }

    /**
     * View subcategory.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $subcategory = new Subcategory;
        return view('admin.subcategory.view', ['subcategory' => $subcategory->where('id', '=', $id)->first()]);   
    }

    /**
     * Delete subcategory.
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
     * Create/Update subcategory process.
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
