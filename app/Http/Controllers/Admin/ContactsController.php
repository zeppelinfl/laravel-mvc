<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\User;

class ContactsController extends Controller
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
     * List contacts on contacts page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contact = new Contact;
        return view('admin.contact.index', ['contacts' => $contact->get()]);
    }

    /**
     * Create contacts form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {

        return view('admin.contact.create');   
    }

    /**
     * Edit contacts form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $contact = new Contact;
        return view('admin.contact.edit', ['contact' => $contact->where('id', '=', $id)->first()]);   
    }

     /**
     * Edit contacts form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $contact = new Contact;
        return view('admin.contact.view', ['contact' => $contact->where('id', '=', $id)->first()]);   
    }

    /**
     * Delete contacts form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $contact = new Contact;
        $contact->where('id', '=', $id)->delete();
        return redirect()->route('contactA');
    }

    /**
     * Create contacts process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
       
        $user = new User;
        $userEmail = User::where('email', '=', $request->email)->first();
        if(!empty($userEmail)) {
            $request->request->add(['user_id' => $userEmail->id]);
        }
        $contact = new Contact;
        if($request->id != '') {
            $contact = $contact->find($request->id);
            $contact->id = $request->id; 
        }
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->content = $request->content;
        if($request->user_id != '') {
            $contact->user_id = $request->user_id;
        }

        $contact->save();
        return redirect()->route('contactA');
    }


}
