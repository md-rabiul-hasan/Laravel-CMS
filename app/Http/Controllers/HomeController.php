<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function shout(){
        $user_id = Auth::user()->id;
        $posts = Status::where('user_id',$user_id)->orderBy('created_at', 'desc')->get();
        return view('shout',["posts"=>$posts]);
    }

    public function savePost(Request $request){
        $post = $request->post('post');
        $user_id = Auth::user()->id;
        
        $status = new Status();
        $status->status = $post;
        $status->user_id = $user_id;
        $status->save();
        return redirect()->route('shout');
    }
}
