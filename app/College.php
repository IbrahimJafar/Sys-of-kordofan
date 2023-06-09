<?php

namespace App;

use App\ORM\SharedLocalizationAttributes;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $guarded = [];


    use SharedLocalizationAttributes;


    public function getRouteKeyName()
    {
        return 'slug'; // TODO: Change the autogenerated stub
    }

    public function features()
    {
        return $this->morphMany(Feature::class,'features');
    }




    public function getDescriptionAttribute()
    {
        return app()->isLocale('ar') ? $this->ar_description : $this->en_description;
    }

}
