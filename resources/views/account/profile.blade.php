@extends('layouts.chat')

@section('content')
    @if (!$user->isEmpty())
        <title>{{ ucFirst($user[0]->username) }}'s Profile</title>
        <div class='w-full text-center py-3 px-5 bg-green-200 border-2 border-green-800 text-green-800 font-semibold hidden'
            id='alertDiv'></div>
        <div class='flex flex-col h-[80vh] lg:justify-center items-center mt-0'>
            <div class="mb-8 mt-14 lg:mt-0">
                {!! QrCode::size(300)->style('round')->backgroundColor(3, 105, 161)->color(255, 255, 255)->generate("https://noxis.app/chats/$fetchedUser") !!}
            </div>
            <div class='text-sky-600 mt-2 w-[90%] lg:w-1/3 flex flex-row justify-around bg-zinc-700 py-5 '>
                <h2 class='inline font-medium text-2xl'>{{ $user[0]->username }}</h2>
                <a href='/chats/{{ $user[0]->username }}' class='text-white text-xl' title='Text User'><i
                        class="fa-solid fa-message"></i></a>
            </div>

            @if (strtolower(Cookie::get('username')) === strtolower($user[0]->username))
                <div class='flex flex-row w-[90%] h-auto items-center justify-center bg-zinc-800 lg:w-1/3 py-2'>

                    <input value="https://noxis.app/chats/{{ Cookie::get('username') }}"
                        class='py-3 px-3 w-4/5 text-left text-white bg-transparent  font-medium' id='linkText' disabled />

                    <button id='copyLink' class='text-white text-lg '><i class="fa-solid fa-copy"></i></button>

                </div>

                <a href="{{ route('logout') }}"
                    class='text-red-500 text-sm font-medium mt-[5vh] mb-[5vh] lg:mb-[5vh] lg:mt-[10vh] bg-red-900 p-2 px-4 rounded-lg hover:bg-red-200'>Log Out</a>
            @endif

        </div>
        <!-- <div class='blur-sm bg-zinc-500 text-zinc-900 px-6 p-2 mt-6' id='email'>It's a secret!</div>
                                <button onclick='showemail()' class='text-xs font-medium mt-1' id="view">View email</button>
                                </div>

                                <script type="text/javascript">
                                    function showemail() {
                                        const email = document.getElementById('email')
                                        email.classList.remove('blur-sm')
                                    }
                                </script> -->
    @else

        <head>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
            <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.svg') }}" />
            <title>User Not Found!</title>
        </head>

        <body class="antialiased bg-[#121212]">
            <div class='flex flex-col w-screen h-[80vh] justify-center items-center'>
                <h1 class='text-[8rem] text-red-600 font-extralight'>404</h1>
                <h3 class='text-zinc-400'>The user doesn't exist here, try Twitter!</h3>
                <a href='/' class='text-sm mt-10 text-green-600'><i class='fa-solid fa-house'></i> Go Back Home</a>
            </div>
    @endif

    <script type="text/javascript">
        const linkText = document.getElementById('linkText')
        const copyBtn = document.getElementById('copyLink')
        const alertDiv = document.getElementById('alertDiv')

        copyBtn.addEventListener('click', () => {
            linkText.select();
            linkText.setSelectionRange(0, 99999); /* For mobile devices */

            navigator.clipboard.writeText(linkText.value);

            alertDiv.classList.remove('hidden')
            alertDiv.innerText = 'Link copied to clipboard, share to chat chatting!'
            setTimeout(() => {
                alertDiv.classList.add('hidden')
                alertDiv.innerText = ''
            }, 2500);

        })

        const editBtn = document.getElementById('editProfile')
    </script>
@endsection
