<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $bannerGroup = Group::getSystemBannerGroup();
        $bannerPosts =   $bannerGroup->posts()->orderBy('id','desc')->take(5)->get();

        $latestNewsGroup = Group::getSystemLatestNewsGroup();
        $latestNewsPosts =   $latestNewsGroup->posts()->orderBy('id','desc')->take(4)->get();

        $eventsGroup = Group::getSystemEventGroup();
        $eventsPosts =   $eventsGroup->posts()->orderBy('id','desc')->take(6)->get();

        $informationGroup = Group::getSystemInformationGroup();
        $introductionPosts =   $informationGroup->posts()->take(6)->get();

        $EServicesGroup = Group::getSystemEServicesGroup();

        return view('home.index',compact('EServicesGroup','informationGroup','introductionPosts','eventsGroup','eventsPosts','bannerGroup','bannerPosts','latestNewsPosts','latestNewsGroup'));
    }
}
