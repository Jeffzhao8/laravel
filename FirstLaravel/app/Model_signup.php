<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_signup extends Model
{
    protected $connection ='mysql';
    //protected $primaryKey ='';
    protected $table ='users';
  

    protected $fillable = array('username', 'email', 'password');
    public $timestamps = false;
}
