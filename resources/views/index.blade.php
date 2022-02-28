@extends('layouts.app')

@section('content')
<title>Noxis - Fun, Easy & Anonymous Conversations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" integrity="sha512-4rPgyv5iG0PZw8E+oRdfN/Gq+yilzt9rQ8Yci2jJ15rAyBmF0HBE4wFjBkoB72cxBeg63uobaj1UcNt/scV93w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <div id="fullpage">
        <div class="section" id="first">
            <div class="box w-5/6">
                <div class="box2 h-4/5">
                    <div class="box3 w-4/5">
                        <div class="text-center">
                            <h1 class="text-white text-sm xl:text-3xl font-semibold inline mainText">Say hi to <span class="text-sky-500 typedText"></span> chats.</h1>
                        <div class="flex flex-col items-center xl:flex-row w-full xl:justify-evenly font-medium mt-7 xl:mt-10 text-xs xl:text-lg">
                        <a href="/signup" class="p-2 px-5 bg-sky-700 text-white rounded-md w-4/5 xl:w-1/3 mx-2 my-2 xl:my-0">Sign Up</a>
                        <a href="/signin" class="p-2 px-5 bg-sky-700 text-white rounded-md w-4/5 xl:w-1/3 mx-2 my-2 xl:my-0">Sign In</a>
                        <a href="/chats" class="p-2 px-5 bg-sky-700 text-white rounded-md w-4/5 xl:w-1/3 mx-2 my-2 xl:my-0"><i class="fa-solid fa-user-secret"></i> Continue as Anon</a>
                        </div>
                        </div>
                    </div>
                </div>
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
	    scrollingSpeed: 500,
        fixedElements: '.navBar',
    });
    
    //methods
    fullpage_api.setAllowScrolling(true);

    //TypedJS
    var options = {
    strings: ['easy', 'anonymous', 'fun'],
    typeSpeed: 140,
    loop: true,
    loopCount : Infinity,
    startDelay: 200,
    backDelay: 1400,
};

var typed = new Typed('.typedText', options);
    </script>
@endsection