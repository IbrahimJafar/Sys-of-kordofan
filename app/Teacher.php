<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];


    public function features()
    {
        return $this->morphMany(Feature::class,'features');
    }

}
