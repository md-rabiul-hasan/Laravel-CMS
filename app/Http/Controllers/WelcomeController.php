<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $allPost = Status::orderBy('created_at','desc')->get();
        $data =  [
            "allPost" => $allPost
        ];
        return view('index',$data);
    }
}
