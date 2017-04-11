<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function post_form()
    {
        return view('Post_Form');
    }

     public function after_sub()
    {
        return view('welcome');// redirect bak to home after submit confirm
    }
    public function load_post(){
        return view('home');
    }

    
}
