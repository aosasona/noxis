@extends('layouts.app')

@section('content')

<div class="w-full h-[95vh] lg:h-[85vh] flex flex-col lg:flex-row justify-center items-center p-2">
<div class="home__main">
<h1 class="font-medium text-6xl lg:text-7xl text-blue-500">Hello,</h1>
<h2 class="font-medium text-2xl lg:text-4xl text-gray-200">Welcome to <span class="text-blue-500 font-semibold">RanCh</span></h2>
</div>
<img src="{{ asset('img/main.svg') }}" alt="Main SVG" class="p-6 mt-8 lg:p-0 lg:mt-0 h-1/2 home__svg"/>
</div>

<a href="#home__about" class="absolute right-5 bottom-8 border-2 border-white rounded-[50%] lg:hidden p-2 px-3 text-xl font-semibold downNav" id="downNav"><i class="fa-solid fa-chevron-down"></i></a>

<div class="" id="home__about">
    <div class="">
        <img src="{{ asset('img/chat.svg') }}" alt="Main SVG" class="w-1/2 home__svg"/>
    </div>
</div>

<script>
    window.onscroll = () => {
        var downNav = document.getElementById('downNav');
        downNav.classList.add('hidden');
    }
</script>
@endsection


