<?php

namespace App;

use App\ORM\SharedLocalizationAttributes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    use SharedLocalizationAttributes;


    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function poster()
    {
        return $this->morphTo('poster');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getImageUrlAttribute()
    {
        return $this->images()->count() > 0 ? $this->images()->first()->url : "";
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function getEventDateAttribute()
    {
        return $this->getExtraKeyValue('event_date');
    }
    public function getEventDayAttribute()
    {
        $date = Carbon::parse($this->event_date);
        return $date->day;
    }

    public function getEventMonthAndYearAttribute()
    {
        $date = Carbon::parse($this->event_date);
        return $date->format('Y-m');
    }


    public function getExtraKeyValue($key)
    {
        $json_t = json_decode($this->extra_data, true);
        if (!empty($json_t)) {
            return $json_t['event_date'];
        }
        return "";
    }
}
