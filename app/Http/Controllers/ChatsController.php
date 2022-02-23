<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Chatslist;

use \App\Models\Chats;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class ChatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all of the user's chats
        $currentUser = Cookie::get('username');

        $chats = Chatslist::where('user1', $currentUser)->orwhere('user2', $currentUser)->get();

        return view('chat.index')->with('chats', $chats)
                                ->with('currentUser', $currentUser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
          //Show current conversation
        
          $currentUser = Cookie::get('username');

          if(strtolower($user) === strtolower($currentUser)){
              return Redirect::back();
          }

          $chats = Chats::where('from', '=', $currentUser, 'and', 'to', '=', $user)->orwhere('to', '=', $currentUser, 'and', 'from', '=', $user)->get();

          return view('chat.view')->with('chats', $chats)
                                ->with('user', $user)
                                ->with('currentUser', $currentUser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
