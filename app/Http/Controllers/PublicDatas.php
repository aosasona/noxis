<?php

namespace App\Http\Controllers;

use App\Models\public_data;
use Illuminate\Http\Request;

class PublicDatas extends Controller
{
    public function index($shortLink) {

        $shortUrls = public_data::where('short_link', $shortLink)->get();

        foreach ($shortUrls as $url) {
            return $url->username;
        }
    }
}
