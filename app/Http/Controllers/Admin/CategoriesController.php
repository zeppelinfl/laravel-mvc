<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;

class CategoriesController extends Controller
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
     * List Categories.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = new Category;
        return view('admin.category.index', ['categories' => $category->get()]);
    }

    /**
     * Create category form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('admin.category.create');   
    }

    /**
     * Edit category form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $category = new Category;
        return view('admin.category.edit', ['category' => $category->where('id', '=', $id)->first()]);   
    }

    /**
     * View category.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $category = new Category;
        return view('admin.category.view', ['category' => $category->where('id', '=', $id)->first()]);   
    }

    /**
     * Delete category.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $category = new Category;
        $category->where('id', '=', $id)->delete();
        return redirect()->route('categoryA');
    }

    /**
     * Create/Update category process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $category = new Category;
        if($request->id != '') {
            $category = $category->find($request->id);
            $category->id = $request->id; 
        }
        $category->name = $request->name;
        $category->location_number = $request->location_number;
        $category->awesome_sign = $request->awesome_sign;
        $category->save();
        return redirect()->route('categoryA');
    }
}
