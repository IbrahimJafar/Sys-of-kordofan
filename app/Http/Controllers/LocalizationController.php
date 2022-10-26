<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function change($locale)
    {


        if (in_array($locale, ['en', 'ar'])) {
            Session::put('appLocale', $locale);
        }




        return back();
    }
}
