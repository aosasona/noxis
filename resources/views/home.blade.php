@extends('layouts.app')

@section('content')
<title>Noxis - Quick, Fun, Easy & Anonymous Conversations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" integrity="sha512-4rPgyv5iG0PZw8E+oRdfN/Gq+yilzt9rQ8Yci2jJ15rAyBmF0HBE4wFjBkoB72cxBeg63uobaj1UcNt/scV93w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <div id="fullpage">
        <div class="section" id="first">
            <div class="box w-[95%] lg:w-5/6">
                <div class="box2 w-[98%] lg:h-4/5">
                    <div class="box3 w-[98%] lg:w-4/5 py-4 box-content">
                        <div class="text-center">
                            <img src="{{ asset('img/laptop.png') }}" class="w-3/5 m-auto hidden lg:block" id="homeImg" />
                            <img src="{{ asset('img/mobile.png') }}" class="w-full m-auto lg:hidden" id="homeImg" />
                            <h1 class="text-white text-sm lg:text-3xl font-semibold inline mainText">Say Hi to <span class="text-sky-500 typedText"></span> chats.</h1>
                        <div class="flex flex-col items-center lg:flex-row w-full lg:justify-evenly font-medium mt-7 lg:mt-10 text-xs lg:text-lg" id="homeLinks">
                            @if (Cookie::get('username') == null)
                                 <a href="/signup" class="p-2 px-5 bg-sky-700 hover:border-2 hover:bg-transparent hover:border-sky-700 text-white rounded-md w-4/5 lg:w-1/3 mx-2 my-2 lg:my-0">Get Started</a>
                                <a href="/signin" class="p-2 px-5 hover:bg-sky-700 hover:border-none border-2 border-sky-700 text-white rounded-md w-4/5 lg:w-1/3 mx-2 my-2 lg:my-0">Sign In</a>
                                <a href="/chats" class="p-2 px-5 bg-zinc-700 hover:border-2 hover:bg-transparent hover:border-zinc-700 text-white rounded-md w-4/5 lg:w-1/3 mx-2 my-2 lg:my-0"><i class="fa-solid fa-user-secret"></i> Continue as Anon</a>
                            @else
                            <a href="/users/{{ Cookie::get('username') }}" class="p-2 px-5 bg-sky-700 hover:border-2 hover:bg-transparent hover:border-sky-700 text-white rounded-md w-4/5 lg:w-1/3 mx-2 my-2 lg:my-0">My Account</a>
                            @endif
                       
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="w-full text-left lg:text-center font-light lg:font-medium leading-6 lg:leading-10 text-[15px] lg:text-2xl text-zinc-300 bg-[#080808] p-2">
                <div class="m-auto w-5/6 lg:w-3/5">
                <b class="text-sky-600">Noxis</b> is a web service aimed at giving you a platform to communicate quickly, easily & anonymously with whomever you want to chat with – 
                without the distractions of setting passwords or filling long, boring forms. We don't have the standard registration process users usually go through, we don’t serve ads either, we serve you 😎
            </div></div>
            <div class="circle hidden lg:block"></div>
            <div class="circle_second hidden lg:block"></div>
            <div class="square block lg:hidden"></div>
            <div class="square_second block lg:hidden"></div>
        </div>

        <div class="section">
            <div class="m-auto w-5/6 lg:w-3/5 text-white font-normal text-xl bg-[#080808] p-2">
            <h1 class="text-3xl lg:text-5xl font-medium text-white pb-5">Quick Setup</h1>
            <div class="leading-7 lg:leading-9 text-lg lg:text-xl text-zinc-300">
            <b class="text-sky-600">Noxis</b> is very easy to setup, you could chat on Noxis without EVER having an account and we'll never prompt you to create one
                before chatting with someone. And if you do decide to sign up, it takes less than 3 minutes with stable
                internet.
            </div>
            </div>
            <div class="circle_third hidden lg:block"></div>
            <div class="square_third block lg:hidden"></div>
        </div>

        <div class="section">
            <div class="m-auto w-5/6 lg:w-3/5 text-white font-normal text-xl bg-[#080808] p-2">
            <h1 class="text-3xl lg:text-5xl font-medium text-white pb-5">Text Anonymously</h1>
            <div class="leading-7 lg:leading-9 text-lg lg:text-xl text-zinc-300">
            <b class="text-sky-600">No one</b> needs to know who you are, not even us because we don't log anything either. Now, you can finally tell your crush how you
            feel... as soon as you can make them sign up without giving yourself up (good luck with that lol).
            </div>
            <div class="circle_fourth hidden lg:block"></div>
            <div class="square_fourth block lg:hidden"></div>
        </div>
        </div>

        <div class="section">
            <div class="m-auto w-5/6 lg:w-3/5 text-white font-normal text-xl bg-[#080808] p-2">
            <h1 class="text-3xl lg:text-5xl font-medium text-white pb-5">Chat Easily</h1>
            <div class="leading-7 lg:leading-9 text-lg lg:text-xl text-zinc-300">
            <b class="text-sky-600">Noxis</b> was built to be convenient, fun and secure. We're not perfect, but we tried to make the experience fun and easy for you with
            our minimal straight-to-the-point UI that has everything where it should be, convenience features like our scan-to-chat QR codes & fun bubble colors.
            </div>
            </div>
            <div class="circle_fifth hidden lg:block"></div>
            <div class="square_fifth block lg:hidden"></div>
        </div>

        <div class="section">
            <div class="m-auto w-[90%] lg:w-3/5 text-white font-normal text-xl bg-[#080808] py-4 px-6 rounded-md shadow-lg">
            <h1 class="text-2xl lg:text-4xl font-medium text-white pb-5">Getting Started!</h1>
            <div class="leading-7 lg:leading-9 text-sm lg:text-xl text-zinc-300 list-decimal">
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

            <span class="text-gray-300 text-[0.75rem] lg:text-[0.9rem] pt-8 leading-[0.8rem]">Tip : If you can't remember your short link, using <b
                        class="text-sky-600">https://noxis.chat/users/YOUR_USERNAME</b> would also take people to your
                    profile.
            </div>
            <div class="circle_sixth hidden lg:block"></div>
            <div class="square_sixth block lg:hidden"></div>
        </div>
        </div>

        <div class="section">
            <div class="flex flex-col items-center justify-center w-full">
                <div class="border-2 max-w-[70vw] lg:max-w-[16vw] border-red-500 rounded-[50%] p-6" id="circle1"><div class="border-2 border-sky-600 rounded-[50%] p-6" id="circle2">
                    <div class="border-2 border-yellow-50 rounded-[50%] p-6" id="circle3">
                    <img src="{{ asset('img/pixel.png') }}" class="rounded-[50%] w-auto h-auto" />
                </div>
            </div>
        </div>

                <h2 class="text-white font-semibold text-sm mt-14">Built by <a href="https://twitter.com/_realao" target="_blank"
                    rel="noreferrer" class="text-sky-600 no-underline">Ayodeji</a></h2>
                    <h3 class="text-zinc-400 text-xs mt-3">Version 1.0.0</h3>
            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js" integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" integrity="sha512-3J8teBiHrSyaaRBajZyIEtpDsXdPq1gsznKWIVb5CnorQuFhjWGhWe54z8YNnHHr7MZuExb9m5kvf964HiT1Sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
    new fullpage('#fullpage', {
        //options here
        autoScrolling:true,
        scrollHorizontally: false,
        css3: true,
	    scrollingSpeed: 250,
        fixedElements: '.navBar',
        scrollBar: true,
    });
    
    //methods
    fullpage_api.setAllowScrolling(true);

    //TypedJS
    var options = {
    strings: ['quick', 'easy', 'anonymous', 'fun'],
    typeSpeed: 140,
    loop: true,
    loopCount : Infinity,
    startDelay: 200,
    backDelay: 1000,
};

var typed = new Typed('.typedText', options);
    </script>
@endsection