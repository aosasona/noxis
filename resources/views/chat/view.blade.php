@extends('layouts.chat')

@section('content')

<title>Chat  | {{ $user }}</title>

<div class="mx-auto w-full xl:w-3/5 px-0">
    <div class="sticky top-0 mx-auto w-full bg-zinc-800 text-center text-white py-7 mb-4 text-lg font-medium">{{ $user }}</div>

    <div class="px-5">

@foreach ($chats as $chat)
@if (strtolower($chat->from) === strtolower($currentUser))
    <div class="flex w-full justify-end">

        <div class="bg-sky-700 text-white w-auto max-w-[70%] py-2 px-5 rounded-2xl font-medium">
            
            {{ $chat->content }}

            <div class="text-xs text-right text-white">
            @if ($chat->status === "delivered")
                    <i class='fa-solid fa-check'></i>
                @else
                <i class='fa-solid fa-check-double'></i>
                @endif
            </div>

        </div>

    </div>
@else

    <div class="flex w-full justify-start">

        <div class="bg-zinc-700 text-white w-auto max-w-[70%] py-2 px-5 rounded-2xl font-medium">
            
            {{ $chat->content }}

        </div>

    </div>

@endif
   
@endforeach
    </div>
</div>
@endsection