@extends('layouts.conversation')

@section('content')
    <title>{{ $user }} - Chat</title>

    <!-- Top menu with username and buttons -->
    <div
        class="sticky top-0 mx-auto w-full bg-zinc-800 text-center text-white py-4 xl:py-7 mb-4 text-lg font-medium flex justify-between">
        <span class="px-8"><a href="/chats"><i
                    class="fa-solid fa-angle-left font-white"></i></a></span>

        <a href='/users/{{ $user }}' id="chat_user">{{ $user }}</a>

        <button class="text-lg text-red-500 px-8" id="delBtn"><i class="fa-solid fa-trash-can"></i></button>
    </div>
    <div class="mx-auto w-full xl:w-3/5 px-0">
        <div class="px-5 mb-[9vh] text-sm xl:text-lg" id="chatcontent">

            <!-- Conversation display (loop) -->
            @foreach ($chats as $chat)
                @if (strtolower($chat->from) === strtolower($currentUser))
                    <div class="flex w-full justify-end">
                        <!-- Sent by user -->
                        <div
                            class="text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4 bubble">

                            {{ $chat->content }}

                            <div class="text-xs text-right">

                                <!-- Timestamp and read receipt -->
                                @if ($chat->status === 'delivered')
                                    <i class='fa-solid fa-check pt-2 text-[0.6rem]'><span
                                            class="font-semibold mx-1">{{ $chat->updated_at->diffForHumans() }}</span></i>

                                @else
                                    <!-- Read indicator -->
                                    <i class='fa-solid fa-check-double pt-2 text-[0.6rem]'><span
                                            class="font-semibold mx-1">{{ $chat->updated_at->diffForHumans() }}</span></i>
                                @endif
                            </div>

                        </div>

                    </div>
                @else
                    <!-- Received by user -->
                    <div class="flex w-full justify-start">

                        <div
                            class="bg-zinc-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4">

                            {{ $chat->content }}

                            <!-- Timestamp -->

                            <div class="pt-2 text-[0.6rem] font-semibold mx-1">{{ $chat->updated_at->diffForHumans() }}
                            </div>

                        </div>

                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div id="confirm" class="fixed top-0 left-0 right-0 bottom-0 hidden">
        <div class="flex w-full h-[90vh] justify-center items-center">
            <div class="w-4/5 xl:w-1/3 bg-zinc-800 px-6 lg:px-10 py-8 rounded-xl drop-shadow-xl z-0">
                <h1 class="text-red-600 font-semibold text-xl">Confirm Action</h1>
                <p class="text-zinc-100 mt-8 text-sm">You are about to delete this <b>ENTIRE</b> conversation, are you sure you want to proceed with this action?</p>
    
                 <form onsubmit="return false" class="flex flex-row w-full justify-between mt-12">  
                    @csrf 
                    <button class="font-semibold text-sm bg-zinc-700 text-zinc-400 p-2 px-4 rounded-lg hover:bg-zinc-900 hover:text-zinc-500" id='cancel'>Cancel</button>
                    
                    <button class="font-semibold text-sm bg-red-800 text-red-400 p-2 px-4 rounded-lg hover:bg-red-900 hover:text-red-500" id='delete'>Delete</button>
                 </form>
            </div>
        </div>
        <div class="absolute top-0 left-0 right-0 bottom-0 w-screen h-screen bg-black opacity-70 z-[-1]" id="delContainer"></div>

    </div>

@endsection
