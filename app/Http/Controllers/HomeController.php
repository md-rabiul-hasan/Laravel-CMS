<?php

namespace App\Http\Controllers;

use App\Friend;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    public function shout() {
        $posts = Auth::user()->friendshipStatus;
        return view('shout', ["posts" => $posts]);
    }

    public function savePost(Request $request) {
        $post    = $request->post('post');
        $user_id = Auth::user()->id;

        $status          = new Status();
        $status->status  = $post;
        $status->user_id = $user_id;
        $status->save();
        return redirect()->route('shout');
    }

    public function publiTimeline($nickname) {
        $user = User::where('nickname', $nickname)->first();
        if ($user) {
            $statuses           = Status::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
            $public_user_name   = $user->name;
            $public_user_avatar = $user->avatar;
            $displayAction      = false;
            $friendId           = $user->id;
            if (Auth::check()) {
                if (Auth::user()->id != $user->id) {
                    $displayAction = true;
                }
            }

            if (empty($public_user_avatar)) {
                $public_user_avatar = 'images/avatar.jpg';
            }
            $data = [
                "statuses"           => $statuses,
                "public_user_name"   => $public_user_name,
                "public_user_avatar" => $public_user_avatar,
                "displayAction"      => $displayAction,
                "friendId"           => $friendId,
            ];
            return view('shoutpublic', $data);
        } else {
            return redirect()->route('shout');
        }
    }

    public function makeFriend($friendId) {
        $current_user_id = Auth::user()->id;
        if (Friend::where('user_id', $current_user_id)->where('friend_id', $friendId)->count() == 0) {
            $friend            = new Friend();
            $friend->user_id   = $current_user_id;
            $friend->friend_id = $friendId;
            $friend->save();
        }

        if (Friend::where('friend_id', $current_user_id)->where('user_id', $friendId)->count() == 0) {
            $friend            = new Friend();
            $friend->user_id   = $friendId;
            $friend->friend_id = $current_user_id;
            $friend->save();
        }
        if (Friend::where('friend_id', $current_user_id)->where('user_id', $current_user_id)->count() == 0) {
            $friend            = new Friend();
            $friend->user_id   = $current_user_id;
            $friend->friend_id = $current_user_id;
            $friend->save();
        }
        return redirect()->route('shout');
    }

    public function makeUnfriend($friendId) {
        $current_user_id = Auth::user()->id;
        if (Friend::where('user_id', $current_user_id)->where('friend_id', $friendId)->count() == 1) {
            Friend::where('user_id', $current_user_id)->where('friend_id', $friendId)->delete();
        }

        if (Friend::where('friend_id', $current_user_id)->where('user_id', $friendId)->count() == 1) {
            Friend::where('friend_id', $current_user_id)->where('user_id', $friendId)->delete();
        }

        return redirect()->route('shout');
    }

}
