<?php

namespace App\Http\Controllers;

use App\Models\VideoData;
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

        //This query checks for an existing video ID - without getting the count yet
       $getVideoId =  VideoData::where(function($query1) use($creator, $client) {
            $query1->where('user1', $creator)
                    ->where('user2', $client);
        })
        ->orWhere(function($query2) use($creator, $client) {
            $query2->where('user1', $client)
                    ->where('user2', $creator);
        });

        //This block generates a unique meeting Id with a length of 8 characters
        $meetingIdArray = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

        $RandId = array_rand($meetingIdArray, 12);

        $generatedMeetingId = $meetingIdArray[$RandId[0]].$meetingIdArray[$RandId[11]].$meetingIdArray[$RandId[2]].$meetingIdArray[$RandId[3]].$meetingIdArray[$RandId[10]].$meetingIdArray[$RandId[5]].$meetingIdArray[$RandId[9]].$meetingIdArray[$RandId[7]];

        //This block creates a new input if these users have no 
        if($getVideoId->count() == 0 || $getVideoId->count() < 1) {
            $createVideoId = new VideoData;
            $createVideoId->user1 = $creator;
            $createVideoId->user2 = $client;
            $createVideoId->meeting_id = $generatedMeetingId;
            $createVideoId->save();
        }

        $fetchVideoId = $getVideoId->get();

        return view('video.index')->with('fetchedId', $fetchVideoId)->with('video_id', $user)->with('client', $client);
    }
}
