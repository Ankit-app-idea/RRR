<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth')->except('home')->except('aboutUs')->except('service');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(){
        return view('welcome');
    }
    public function aboutUs(){
        return view('about-us');
    }
    public function service(){
        return view('service');
    }
    public function loginViewPage() {
        return view('auth.login');
    }
    public function index()
    {
        return view('home');
    }
}
