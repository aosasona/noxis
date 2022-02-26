<?php

namespace App\Http\Controllers;

use App\Models\public_data;
use Illuminate\Http\Request;

class PublicDatas extends Controller
{
    public function index($shortLink) {

        $checkLink = public_data::where('short_link', $shortLink)->count();

        if($checkLink == 0 || $checkLink < 1){
            return view('errors.page');
        }

        $shortUrls = public_data::where('short_link', $shortLink)->get();

        foreach ($shortUrls as $url) {
            $userUrl = $url->username;

            return redirect()->to("/chats/$userUrl");
        }
    }
}
