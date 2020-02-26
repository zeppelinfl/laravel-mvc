<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\User;

class ReviewsController extends Controller
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
        $review = new Review;
        $reviews = $review->get();
        $user = new User;
        foreach ($reviews as $key => $value) {
            $user = $user->whereId($value->user_id)->first();
            $reviews[$key]['user_name'] = $user->name;
            $reviews[$key]['message'] = substr($value->message, 0, 60).'...';
        }
        return view('admin.review.index', ['reviews' => $reviews]);
    }

    /**
     * Create countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $user = new User;
        return view('admin.review.create', ['users' => $user->select('id', 'email')->get()]);   
    }

    /**
     * Edit countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $review = new Review;
        $user = new User;
        return view('admin.review.edit', ['review' => $review->where('id', '=', $id)->first(), 'users' => $user->select('id', 'email')->get()]);   
    }

    /**
     * Delete countries form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id, Request $request)
    {
        $review = new Review;
        $review->where('id', '=', $id)->delete();
        return redirect()->route('reviewA');
    }

    /**
     * Create countries process.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $review = new Review;
        if($request->id != '') {
            $review = $review->find($request->id);
            $review->id = $request->id; 
        }
        $review->message = $request->message;
        $review->user_id = $request->user_id;
        $review->save();
        return redirect()->route('reviewA');
    }


}
