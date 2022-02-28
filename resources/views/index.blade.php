@extends('layouts.app')

@section('content')
    <title>Noxis - Quick, Easy & Anonymous Conversations</title>
    <div class="w-full h-[95vh] lg:h-[85vh] flex flex-col lg:flex-row justify-center items-center p-2">
        <div class="home__main w-5/6 lg:w-1/3">
            <h1 class="font-medium text-6xl lg:text-[5.5rem] text-sky-600 mb-3">Hello,</h1>
            <h2 class="font-medium text-2xl lg:text-4xl text-gray-200 typedText"></h2>
        </div>
        <img src="{{ asset('img/main.svg') }}" alt="Main SVG" class="p-6 mt-8 lg:p-0 lg:mt-0 h-1/2 home__svg" />
        <p class="downNav lg:hidden text-xs text-sky-600 z-[-1]" id="downNav">What is Noxis? &darr;</p>
    </div>


    <div class="w-full px-8 my-8 lg:mt-0 lg:my-20 text-left lg:text-center font-light lg:font-medium text-lg lg:text-2xl text-zinc-400"
        data-aos="fade-up" data-aos-duration="1000"><span class="text-sky-600 font-semibold">Noxis</span> is a web service
        aimed at giving you a platform to communicate quickly, easily & anonymously with whomever you want to chat with –
        without the distractions of setting passwords or filling long, boring forms. We don't have the standard registration
        process users usually go through, we don’t serve ads either, we serve you 😎
        <br />
    </div>

    <div class="w-full px-4 pb-5 lg:px-4 lg:mx-0 flex flex-col lg:flex-row text-center mt-10 lg:mt-32 lg:justify-around"
        id="home__about">
        <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 py-6 rounded-xl lg:mx-4" data-aos="zoom-in"
            data-aos-duration="1000">
            <img src="{{ asset('img/chat.svg') }}" alt="Main SVG 1" class="w-full lg:w-auto lg:h-3/4 p-4" />
            <h1 class="text-2xl font-semibold ">Quick Setup</h1>
            <p class="text-xs text-left p-3 font-semibold text-zinc-400"><b class="text-sky-600">Noxis</b> is very easy to
                setup, you could chat on Noxis without EVER having an account and we'll never prompt you to create one
                before chatting with someone. And if you do decide to sign up, it takes less than 3 minutes with stable
                internet.</p>
        </div>

        <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 py-6 rounded-xl lg:mx-4" data-aos="zoom-in"
            data-aos-duration="1000">
            <img src="{{ asset('img/fast.svg') }}" alt="Main SVG 2" class="w-full lg:w-auto lg:h-3/4 p-4" />
            <h1 class="text-2xl font-semibold ">Text Anonymously</h1>
            <p class="text-xs text-left p-3 font-semibold text-zinc-400"><b class="text-sky-600">No one</b> needs to know
                who you are, not even us because we don't log anything either. Now, you can finally tell your crush how you
                feel... as soon as you can make them sign up without giving yourself up (good luck with that lol).</p>
        </div>

        <div class="w-full mt-8 lg:mt-0 lg:w-1/3 bg-zinc-800 p-4 py-6 rounded-xl lg:mx-4" data-aos="zoom-in"
            data-aos-duration="1000">
            <img src="{{ asset('img/secure.svg') }}" alt="Main SVG 3" class="w-full lg:w-auto lg:h-3/4 p-4" />
            <h1 class="text-2xl font-semibold ">Chat Easily</h1>
            <p class="text-xs text-left p-3 font-semibold text-zinc-400"><b class="text-sky-600">Noxis</b> was built to be
                convenient, fun and secure. We're not perfect, but we tried to make the experience fun and easy for you with
                our minimal straight-to-the-point UI, fun and convenience features like scan-to-chat QR codes & bubble
                colors.</p>
        </div>
    </div>

    <center>
        <div class="mx-8 mt-16 mb-12 relative" data-aos="flip-left" data-aos-duration="1000">

            <h1 class="text-sky-600 text-4xl font-semibold">Getting Started</h1>
            <ul class="mt-10 p-5 py-6 bg-zinc-800 lw-full lg:w-3/5 rounded-2xl text-sm text-left tiltDiv">

                <div class="absolute top-[-10px] left-[-20px] w-2 h-2 p-4 rounded-[50%] bg-red-700"></div>
                <li><span class="text-white">Proceed to the sign-up page using the button below or in the navigation
                        bar.</span></li>
                <li><span class="text-white">Enter a valid e-mail and a custom username (this <b
                            class="text-red-600">CAN NOT</b> be changed later) on the sign-up page.</span></li>
                <li><span class="text-white">You will be sent an OTP via the registered email for login authentication
                        every-time, we do <b class="text-red-600">NOT</b> use fixed passwords for security
                        reasons.</span></li>
                <li><span class="text-white"><b class="text-sky-600">Share</b> your Noxis link or QR code to start
                        chatting! Guests do not need to sign up to chat with you.</span></li>
                <li><span class="text-white">Report issues to <b class="text-sky-600">@NoxisApp</b></span></li>

                <li><span class="text-gray-300 text-xs pt-10">Tip : If you can't remember your short link, using <b
                            class="text-sky-600">https://noxis.chat/users/YOUR_USERNAME</b> would also take people to your
                        profile.</li>
            </ul>
        </div>

        <a href="/signup"
            class="border-2 border-sky-600 text-sky-600 px-6 p-3 rounded-xl hover:bg-sky-700 hover:text-white hover:border-none">Get
            Started</a>
    </center>

    <footer class="flex flex-row-reverse justify-between lg:mt-20 mt-10 mx-3 items-center">
        <a href="https://twitter.com/NoxisApp" target="_blank" rel="noreferrer"><i
                class="fab fa-twitter bg-sky-700 text-sky-400 hover:bg-sky-400 hover:text-sky-700 px-2 py-2 rounded-lg text-lg"></i></a>
        <span class="text-xs my-4 lg:my-0">Developed by <a href="https://twitter.com/_realao" target="_blank"
                rel="noreferrer" class="text-sky-600 underline">Ayodeji</a></span>

    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.js"
        integrity="sha512-ggJ7yQCnXifbDXFFfyNhegaNXkkPMP+0cxMDobX6pABvU4zrqD+NMXxrGoAK9iANboRjpR4ajwWHCCfJXJFpJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        window.onscroll = () => {
            var downNav = document.getElementById('downNav');
            downNav.classList.add('hidden');
        }

        var options = {

            strings: ['Welcome to <span class="text-sky-600 font-semibold">Noxis</span>.',
                'Say Hi to <span class="text-sky-600 font-semibold">anonymous</span> chatting!',
                'Text without revealing <span class="text-sky-600 font-semibold">ANY</span> details.',
                'Reach your audience with <span class="text-sky-600 font-semibold">ONE</span> click.',
                'We are glad you found us!'
            ],
            typeSpeed: 90,
            backDelay: 900,
            loop: false,
            startDelay: 1100,
            showCursor: false,

        };

        var typed = new Typed('.typedText', options);
    </script>
@endsection
