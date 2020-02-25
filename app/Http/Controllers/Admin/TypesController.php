<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;

class TypesController extends Controller
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
        $type = new Type;
        return view('admin.type.index', ['types' => $type->get()]);
    }

    /**
     * Create countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {

        return view('admin.type.create');   
    }

    /**
     * Edit countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $type = new Type;
        return view('admin.type.edit', ['type' => $type->where('id', '=', $id)->first()]);   
    }

    /**
     * Delete countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $type = new Type;
        $type->where('id', '=', $id)->delete();
        return redirect()->route('typeA');
    }

    /**
     * Create countries process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
       
        $type = new Type;
        if($request->id != '') {
            $type = $type->find($request->id);
            $type->id = $request->id; 
        }
        $type->name = $request->name;
        $type->save();
        return redirect()->route('typeA');
    }


}
