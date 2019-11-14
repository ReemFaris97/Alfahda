<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambassador extends Model
{

    protected $fillable = [
    'name','goals','message','diagnosis','image','mother_message'
    ];




}
