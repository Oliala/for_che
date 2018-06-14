<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

use App\Post;
use App\Place;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        $places=Place::all();
//        $email = Auth::user()->email;
//        Mail::to($email)->send(new DemoMail());
        return view('home',['posts' => $posts,'places'=>$places]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user',$user));
    }
}
