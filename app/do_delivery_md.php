<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class do_delivery_md extends Model
{
    protected $connection ='mysql';
    //protected $primaryKey ='';
    protected $table ='d_delivery';
  

    protected $fillable = array('leaveCountry', 'leaveCity', 'arriveCountry', 'arriveCity', 
    	'leaveDate', 'arriveDate' ,'email', 'mobile', 'description');
    public $timestamps = false;
}
