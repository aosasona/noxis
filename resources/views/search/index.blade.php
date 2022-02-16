@extends('layouts.chat')

@section('content')
    <form class='w-screen flex flex-col items-center mt-6 lg:mt-5 box-border px-6 lg:px-0'>
        <input name='search' placeholder='Search for registered users...' class='w-full lg:w-2/3 h-auto px-4 py-2 lg:py-4 bg-zinc-800 border-2 lg:border-4 border-zinc-600 rounded-xl text-base lg:text-lg text-zinc-300 focus:outline-none' id='searchTerm'/>
        <div class='text-red-600 font-normal mt-2 text-sm' id='errorText'></div>
    </form>

    <script src='{{ asset('js/search.js') }}'></script>
@endsection