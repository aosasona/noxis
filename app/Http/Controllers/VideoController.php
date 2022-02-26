<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class VideoController extends Controller
{
    //Video calling feature

    public function index($creator, $client) {
        $user = Cookie::get('username');

        if(strtolower($user) != strtolower($creator) && strtolower($user) != strtolower($client)) {
            return view('video.error');
        }

        $meeting_id = strToUpper($creator).'_'.strToUpper($client);
        return view('video.index')->with('meetId', $meeting_id)->with('video_id', $user)->with('client', $client);
    }
}
