@extends('layouts.conversation')

@section('content')

<title>{{ $user }} - Chat</title>


    <div class="sticky top-0 mx-auto w-full bg-zinc-800 text-center text-white py-4 xl:py-7 mb-4 text-lg font-medium flex justify-between">
        <span class="px-8"><a href="{{ URL::previous() }}"><i class="fa-solid fa-angle-left font-white"></i></a></span>

        <a href='/users/{{ $user }}'>{{ $user }}</a>

        <button class="text-lg text-white px-8" id="navBtn"><i class="fa-solid fa-ellipsis"></i></button>
    </div>
<div class="mx-auto w-full xl:w-3/5 px-0">
    <div class="px-5 mb-[1vh] text-sm xl:text-lg">

@foreach ($chats as $chat)
@if (strtolower($chat->from) === strtolower($currentUser))
    <div class="flex w-full justify-end">

        <div class="bg-sky-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4">
            
            {{ $chat->content }}

            <div class="text-xs text-right text-white">
            @if ($chat->status === "delivered")
                    <i class='fa-solid fa-check pt-2 text-[0.6rem]'><span class="font-semibold mx-1">{{ $chat->updated_at->diffForHumans() }}</span></i>
                @else
                <i class='fa-solid fa-check-double pt-2 text-[0.6rem]'><span class="font-semibold mx-1">{{ $chat->updated_at->diffForHumans() }}</span></i>
                @endif
            </div>

        </div>

    </div>
@else

    <div class="flex w-full justify-start">

        <div class="bg-zinc-700 text-white w-auto max-w-[75vw] xl:max-w-[55%] py-2 px-5 rounded-2xl font-medium break-words mb-4">
            
            {{ $chat->content }}

            <div class="pt-2 text-[0.6rem] font-semibold mx-1">{{ $chat->updated_at->diffForHumans() }}</div>

        </div>

    </div>
    
@endif
   
@endforeach
    </div>
</div>
@endsection