@extends('layouts.app')

@section('content')
<title>Noxis - Quick, Fun, Easy & Anonymous Conversations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" integrity="sha512-4rPgyv5iG0PZw8E+oRdfN/Gq+yilzt9rQ8Yci2jJ15rAyBmF0HBE4wFjBkoB72cxBeg63uobaj1UcNt/scV93w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <div id="fullpage">
        <div class="section" id="first">
            <div class="box w-5/6">
                <div class="box2 h-4/5">
                    <div class="box3 w-4/5">
                        <div class="text-center">
                            <h1 class="text-white text-sm lg:text-3xl font-semibold inline mainText">Say hi to <span class="text-sky-500 typedText"></span> chats.</h1>
                        <div class="flex flex-col items-center lg:flex-row w-full lg:justify-evenly font-medium mt-7 lg:mt-10 text-xs lg:text-lg" id="homeLinks">
                        <a href="/signup" class="p-2 px-5 bg-sky-700 hover:border-2 hover:bg-transparent hover:border-sky-700 text-white rounded-md w-4/5 lg:w-1/3 mx-2 my-2 lg:my-0">Get Started</a>
                        <a href="/signin" class="p-2 px-5 hover:bg-sky-700 hover:border-none border-2 border-sky-700 text-white rounded-md w-4/5 lg:w-1/3 mx-2 my-2 lg:my-0">Sign In</a>
                        <a href="/chats" class="p-2 px-5 bg-zinc-700 hover:border-2 hover:bg-transparent hover:border-zinc-700 text-white rounded-md w-4/5 lg:w-1/3 mx-2 my-2 lg:my-0"><i class="fa-solid fa-user-secret"></i> Continue as Anon</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="w-full text-left lg:text-center font-light lg:font-medium text-sm lg:text-2xl text-zinc-400">
                <div class="m-auto w-5/6 lg:w-3/5">
                Noxis is a web service aimed at giving you a platform to communicate quickly, easily & anonymously with whomever you want to chat with – 
                without the distractions of setting passwords or filling long, boring forms. We don't have the standard registration process users usually go through, we don’t serve ads either, we serve you 😎
            </div></div>
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
	    scrollingSpeed: 500,
        fixedElements: '.navBar',
        parallax: true,
	    parallaxOptions: {type: 'reveal', percentage: 70, property: 'translate'},
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