@extends('layouts.app')

@section('content')

<div class="w-full h-[95vh] lg:h-[85vh] flex flex-col lg:flex-row justify-center items-center p-2">
<div class="home__main">
<h1 class="font-medium text-6xl lg:text-7xl text-sky-600">Hello,</h1>
<h2 class="font-medium text-2xl lg:text-4xl text-gray-200">Welcome to <span class="text-sky-600 font-semibold">RanCh</span></h2>
</div>
<img src="{{ asset('img/main.svg') }}" alt="Main SVG" class="p-6 mt-8 lg:p-0 lg:mt-0 h-1/2 home__svg"/>
</div>

<a href="#home__about" class="absolute right-5 bottom-8 border-2 border-white rounded-[50%] lg:hidden p-2 px-3 text-xl font-semibold downNav" id="downNav"><i class="fa-solid fa-chevron-down"></i></a>

<div class="w-full px-8 my-8 lg:mt-0 lg:my-20 text-left lg:text-center font-light lg:font-medium text-lg lg:text-2xl text-white" data-aos="fade-up" data-aos-duration="1000"><span class="text-sky-600">RanCh</span> is a web service aimed at giving you a platform to communicate quickly, easily & anonymously with whomever you want to chat with –
    without the distractions of usernames, number exchanging and typing on your mobile phone. We don't have the standard registration process users usually go through,
    we don’t serve ads either, we serve you 😎
</div>

<div class="w-full px-4 pb-5 lg:px-4 lg:mx-0 flex flex-col lg:flex-row text-center mt-10 lg:mt-32 lg:justify-around" id="home__about">
    <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 rounded-xl lg:mx-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('img/chat.svg') }}" alt="Main SVG 1" class="w-full lg:w-auto lg:h-3/4 p-4"/>
        <h1 class="text-2xl font-semibold ">Quick Setup</h1>
    </div>

    <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 rounded-xl lg:mx-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('img/fast.svg') }}" alt="Main SVG 2" class="w-full lg:w-auto lg:h-3/4 p-4"/>
        <h1 class="text-2xl font-semibold ">Text Anonymously</h1>
    </div>

    <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 rounded-xl lg:mx-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('img/secure.svg') }}" alt="Main SVG 3" class="w-full lg:w-auto lg:h-3/4 p-4"/>
        <h1 class="text-2xl font-semibold ">Chat Privately</h1>
    </div>
</div>


<script>
    window.onscroll = () => {
        var downNav = document.getElementById('downNav');
        downNav.classList.add('hidden');
    }
</script>
@endsection


