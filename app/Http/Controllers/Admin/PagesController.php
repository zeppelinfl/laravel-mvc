<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Page;

class PagesController extends Controller
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
     * List Pages.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = new Page;
        return view('admin.page.index', ['pages' => $page->get()]);
    }

    /**
     * Create page form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {

        return view('admin.page.create');   
    }

    /**
     * Edit page form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $page = new Page;
        return view('admin.page.edit', ['page' => $type->where('id', '=', $id)->first()]);   
    }

    /**
     * View page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $page = new Page;
        return view('admin.page.view', ['page' => $type->where('id', '=', $id)->first()]);   
    }

    /**
     * Delete page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $page = new Page;
        $page->where('id', '=', $id)->delete();
        return redirect()->route('pageA');
    }

    /**
     * Create/Update type process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
       
        $page = new Page;
        if($request->id != '') {
            $page = $page->find($request->id);
            $page->id = $request->id; 
        }
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();
        return redirect()->route('pageA')->with('success', 'Page stored succesfully!');
    }


}
