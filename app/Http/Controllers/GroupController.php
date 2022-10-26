<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function show(Group $group)
    {
        $posts = $group->posts()->orderBy('id','desc')->paginate(20);
        return view('group.show',compact('posts','group'));
    }
}
