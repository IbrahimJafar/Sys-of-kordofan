<?php


namespace App\ORM;


use Carbon\Carbon;

trait SharedLocalizationAttributes
{
    public function getTitleAttribute()
    {

        return app()->isLocale('ar') ? $this->ar_title : $this->en_title;
    }

    public function getContentAttribute()
    {
        return app()->isLocale('ar') ? $this->ar_content : $this->en_content;
    }

    public function getPublishedAtAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
