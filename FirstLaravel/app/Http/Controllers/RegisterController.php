<?php
namespace App\Http\Controllers;
use Request;

use App\Http\Requests;
use App\Model_signup;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    
    public function index(){
    	return view("signup");
    }
    public function signin(){
    	return view("signin");
    }
     public function store(){
     		$user = new Model_signup;
     		$user-> username=Input::get('username');
     		$user-> email=Input::get('email');
     		$user-> password=Input::get('password');
     		$user->save();
        	echo "Saved Successfully";
    }

}
