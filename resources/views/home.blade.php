@extends('layouts.app')

@section('content')

<div class="w-full h-[95vh] lg:h-[85vh] flex flex-col lg:flex-row justify-center items-center p-2">
<div class="home__main">
<h1 class="font-medium text-6xl lg:text-7xl text-sky-600">Hello,</h1>
<h2 class="font-medium text-2xl lg:text-4xl text-gray-200">Welcome to <span class="text-sky-600 font-semibold">RanCh</span></h2>
</div>
<img src="{{ asset('img/main.svg') }}" alt="Main SVG" class="p-6 mt-8 lg:p-0 lg:mt-0 h-1/2 home__svg"/>
<p class="downNav lg:hidden text-xs text-sky-600 z-[-1]" id="downNav">What is RanCh? &darr;</p>
</div>


<div class="w-full px-8 my-8 lg:mt-0 lg:my-20 text-left lg:text-center font-light lg:font-medium text-lg lg:text-2xl text-zinc-400" data-aos="fade-up" data-aos-duration="1000"><span class="text-sky-500 font-semibold">RanCh</span> is a web service aimed at giving you a platform to communicate quickly, easily & anonymously with whomever you want to chat with – without the distractions of setting passwords or filling long, boring forms. We don't have the standard registration process users usually go through, we don’t serve ads either, we serve you 😎
</div>

<div class="w-full px-4 pb-5 lg:px-4 lg:mx-0 flex flex-col lg:flex-row text-center mt-10 lg:mt-32 lg:justify-around" id="home__about">
    <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 py-6 rounded-xl lg:mx-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('img/chat.svg') }}" alt="Main SVG 1" class="w-full lg:w-auto lg:h-3/4 p-4"/>
        <h1 class="text-2xl font-semibold ">Quick Setup</h1>
    </div>

    <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 py-6 rounded-xl lg:mx-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('img/fast.svg') }}" alt="Main SVG 2" class="w-full lg:w-auto lg:h-3/4 p-4"/>
        <h1 class="text-2xl font-semibold ">Text Anonymously</h1>
    </div>

    <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 py-6 rounded-xl lg:mx-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="{{ asset('img/secure.svg') }}" alt="Main SVG 3" class="w-full lg:w-auto lg:h-3/4 p-4"/>
        <h1 class="text-2xl font-semibold ">Chat Securely</h1>
    </div>
</div>

<center>
<div class="mx-8 mt-16 mb-12 relative" data-aos="flip-left" data-aos-duration="1000">
 
<h1 class="text-sky-500 text-3xl font-semibold">Getting Started</h1>
<ul class="mt-10 p-5 py-6 bg-zinc-800 lg:w-1/3 rounded-2xl text-sm text-left tiltDiv">
    
    <div class="absolute top-[-10px] left-[-20px] w-2 h-2 p-4 rounded-[50%] bg-red-700"></div>
    <li><span class="text-white">Proceed to the sign-up page using the button below or in the navigation bar.</span></li>
    <li><span class="text-white">Enter a valid e-mail on the sign-up page.</span></li>
    <li><span class="text-white">You will be sent an OTP for login authentication every-time, we do <b class="text-sky-500">NOT</b> use fixed passwords for security
    reasons.</span></li>
    <li><span class="text-white">Login data is only saved locally on your device for 7 days, after which you'll need to sign in again.</span></li>
    <li><span class="text-white"><b class="text-sky-500">Share</b> your RanCh link to start chatting! Guests do not need to sign up to chat with you.</span></li>
  </ul>
</div>

<a href="/signup" class="border-2 border-sky-500 text-sky-500 px-6 p-3 rounded-xl hover:bg-sky-700 hover:text-white hover:border-none">Get Started</a>
</center>

<footer class="flex flex-row-reverse justify-between lg:mt-16 mt-10 mx-3 items-center">
    <a href="https://twitter.com/ranch_web" target="_blank" rel="noreferrer"><i class="fab fa-twitter bg-sky-700 text-sky-400 hover:bg-sky-400 hover:text-sky-700 px-2 py-2 rounded-lg text-lg"></i></a>
    <span class="text-xs my-4 lg:my-0">Developed by <a href="https://twitter.com/_realao" target="_blank" rel="noreferrer" class="text-sky-600 underline">Ayodeji</a></span>
    
</footer>

<script>
    window.onscroll = () => {
        var downNav = document.getElementById('downNav');
        downNav.classList.add('hidden');
    }
</script>
@endsection


