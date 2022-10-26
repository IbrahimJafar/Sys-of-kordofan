<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $guarded = [];


    public function features()
    {
        return $this->morphTo('feature');
    }
    //
}
