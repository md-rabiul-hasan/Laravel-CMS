<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function profile() {
        return view('profile');
    }

    public function profileUpdate(Request $request) {
        if (Auth::check()) {
            $user           = Auth::user();
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->nickname = $request->nickname;

            $profileImage = "user-" . $user->name . "-" . uniqid() . "." . $request->image->extension();
            $request->image->move(public_path("images"), $profileImage);

            $user->avatar = "images/" . $profileImage;
            $user->save();
            return redirect()->route('profile');
        }
    }

}
