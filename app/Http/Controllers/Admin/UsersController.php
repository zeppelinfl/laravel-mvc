<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->user = new User;
    }

    /**
     * Update user form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update($id)
    {
        return view('admin.user.update', ['user' => $this->user->whereId($id)->first()]);
    }

    /**
     * Store user data.
     *
     * @return void
     */
    public function store(Request $request) 
    {
        $this->user = $this->user->find($request->id);

        if($request->image != '') {
            $request->image->store('public/users');
            $this->user->image = $request->image->hashName();
        }

        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->save();
        return redirect()->route('admin')->with('success', 'User has been updated!');
    }
}