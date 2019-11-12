<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

    protected $fillable = [
    'name','description','user_id','type','image'
    ];

    public function images()
    {
        return $this->hasMany(ActionImage::class,'action_id');
    }



}
