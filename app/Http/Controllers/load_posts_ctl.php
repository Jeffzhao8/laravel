<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class load_posts_ctl extends Controller
{
    
    public function load(){
    	$data = do_delivery_md::all();
    	return view('home')->with('data', $data);
    }
}
