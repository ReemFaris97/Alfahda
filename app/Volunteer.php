<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{

    protected $fillable = [
    'name','phone','email','birth_date','image','nationality','id_card','sex','social_status','city','area','twitter','
    qualification','Specialization','language','job_title','know_fahda','why_fahda','experience','achievements','classes','fields','week','time','work'
    ];

    public function images()
    {
        return $this->hasMany(ActionImage::class,'action_id');
    }



}
