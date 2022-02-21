@extends('layouts.chat')

@section('content')

<title>Chats</title>

@if ($chats->count() == 0)

    <div class='text-zinc-400 font-medium text-sm flex w-screen h-[85vh] xl:h-[95vh] justify-center items-center'>No conversations to display.</div>

@else
    
@endif

@endsection