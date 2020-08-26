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
        return view('shout');
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
