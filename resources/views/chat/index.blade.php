@extends('layouts.chat')

@section('content')

<title>Chats</title>
<style>
body {
    background-color: none !important;
    background-image: url("https://i.ibb.co/JxRPfPZ/ranchbg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-blend-mode: screen;
}
.navFixed {
    background-color: #131313; 
}
</style>

@if ($chats->count() == 0)

    <div class='text-zinc-400 font-medium text-sm flex w-screen h-[85vh] xl:h-[95vh] justify-center items-center'>No conversations to display.</div>

@else
<div class="mx-auto w-screen h-screen xl:w-3/5 py-4 text-left">
    <h1 class="text-zinc-100 text-5xl xl:text-6xl font-semibold text-left px-7 mt-10">Chats</h1>
    <div class="mt-6 w-full px-4">
    @foreach ($chats as $chat)
        <div class="text-zinc-200 bg-zinc-900 w-full p-4 mt-2 rounded-lg flex justify-between">
        <a href="/chats/{{ strtolower($chat->user1) === strtolower($currentUser) ? $chat->user2 : $chat->user1 }}" class="text-lg font-medium">{{ $chat->user1 == $currentUser ? $chat->user2 : $chat->user1 }}</a>
        <div class="inline bg-zinc-700 p-[0.15rem] px-[0.5rem] rounded-md font-semibold {{ $chat->unread_count == 0 ? 'text-white' : 'text-red-500' }}">
            {{ $chat->unread_count }}
        </div>
        </div>
    @endforeach
    </div>
</div>
@endif

@endsection