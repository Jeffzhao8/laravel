<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\do_delivery_md;

class do_delivery_ctl extends Controller
{
    public function create_delivery(){
     		$dd = new do_delivery_md;
     		$dd-> leaveCountry=Input::get('leaveCountry');
     		$dd-> leaveCity=Input::get('leaveCity');
     		$dd-> arriveCountry=Input::get('arriveCountry');
     		$dd-> arriveCity=Input::get('arriveCity');
     		$dd-> leaveDate=Input::get('leaveDate');
     		$dd-> arriveDate=Input::get('arriveDate');
     		$dd-> email=Input::get('email');
     		$dd-> mobile=Input::get('mobile');
     		$dd-> description=Input::get('description');
     		$dd->save();
        	//echo "Your ads posted successfully";
        	return view('after_submit');// redirect to confirm that submit was successed
    }
}
