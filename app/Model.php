<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent; 

class Model extends Eloquent
{
    // protected $fillable = ['title', 'body'];
    protected $fillable = ['name', 'email', 'studentNo', 'contactNo', 'college', 'firstChoice', 'secondChoice', 'facebookLink'];
}
