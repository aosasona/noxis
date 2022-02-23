@extends('layouts.chat')

@section('content')

<title>Chats</title>

@if ($chats->count() == 0)

    <div class='text-zinc-400 font-medium text-sm flex w-screen h-[85vh] xl:h-[95vh] justify-center items-center'>No conversations to display.</div>

@else
<div class="mx-auto w-screen h-screen xl:w-3/5 py-4 text-left">
    <h1 class="text-zinc-100 text-5xl xl:text-6xl font-semibold text-left px-7 pt-3">Chats</h1>
    <div class="mt-6 w-full px-4">
    @foreach ($chats as $chat)
        <div class="text-zinc-200 bg-zinc-800 w-full p-4 mt-2 rounded-lg">
        <a href="/chats/{{ strtolower($chat->user1) === strtolower($currentUser) ? $chat->user2 : $chat->user1 }}" class="text-lg font-medium">{{ $chat->user1 == $currentUser ? $chat->user2 : $chat->user1 }}</a>
        </div>
    @endforeach
    </div>
</div>
@endif

@endsection