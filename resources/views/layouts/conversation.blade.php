<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <meta name="description"
        content="Noxis is a quick, easy and anonymous message service for your professional & personal usage." />
    <meta name="keywords"
        content="Noxis, anonymous, Noxis web, Noxis twitter, Noxis group, message, messaging, quick registration, chat, Noxis chat, link chat, anon, quick convo, quick messaging, influencer medium, easy chat" />

    <!-- Facebook Metadata -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://noxis.chat/">
    <meta property="og:title" content="Start An Anonymous Convo!">
    <meta property="og:description"
        content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="og:image" content="{{ asset('img/favicon.png') }}">

    <!-- Twitter Metadata -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://noxis.chat/">
    <meta property="twitter:title" content="Start An Anonymous Convo!">
    <meta property="twitter:description"
        content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="twitter:image" content="{{ asset('img/favicon.png') }}">

    <!--General Metadata-->
    <meta property="og:site_name" content="Noxis">
    <meta property="og:site" content="https://noxis.chat">
    <meta property="og:title" content="Start An Anonymous Convo!">
    <meta property="og:description"
        content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="og:image" content="{{ asset('img/favicon.png') }}">
    <meta property="og:url" content="https://noxis.chat">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.svg') }}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="antialiased bg-[#121212]">

    <!-- FontAwesome 5.15.3 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />


    <div id="reloadChat">
        @yield('content')
    </div>

    <div class="fixed bottom-0">
        <div class="h-[3vh] w-screen flex flex-row justify-evenly items-center bg-zinc-800 p-1">
            <div id="red" class="bg-red-700 w-8 h-2 p-1 rounded-lg hover:h-5 focus:h-5 bubble-color"
                title="Change Chat Bubble Color"></div>
            <div id="sky" class="bg-sky-700 w-8 h-2 p-1 rounded-lg hover:h-5 focus:h-5 bubble-color"
                title="Change Chat Bubble Color"></div>
            <div id="green" class="bg-green-700 w-8 h-2 p-1 rounded-lg hover:h-5 focus:h-5 bubble-color"
                title="Change Chat Bubble Color"></div>
            <div id="orange" class="bg-orange-700 w-8 h-2 p-1 rounded-lg hover:h-5 focus:h-5 bubble-color"
                title="Change Chat Bubble Color"></div>
            <div id="purple" class="bg-purple-700 w-8 h-2 p-1 rounded-lg hover:h-5 focus:h-5 bubble-color"
                title="Change Chat Bubble Color"></div>
            <div id="yellow" class="bg-yellow-700 w-8 h-2 p-1 rounded-lg hover:h-5 focus:h-5 bubble-color"
                title="Change Chat Bubble Color"></div>
            <div id="white" class="bg-white w-8 h-2 p-1 rounded-lg hover:h-5 focus:h-5 bubble-color"
                title="Change Chat Bubble Color"></div>
        </div>
        <form enctype="multipart/form-data"
            class="bg-zinc-800 flex flex-row w-screen h-auto justify-evenly items-center pb-2 lg:pb-2 pt-1 m-0 text-lg lg:text-xl text-white"
            id="formBody">

            @csrf
            <input type="hidden" name="receiver" value="{{ $user }}" id="chatReceiver" />
           
            <a href="/video/{{ $currentUser }}/{{ $user }}" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-video hover:text-green-500"></i></a>

            <textarea type="text" name="chat_content" id="chat_content"
                class="font-light w-[70%] xl:w-4/5 px-3 py-3 text-sm text-white bg-zinc-700 focus:outline-none" rows="1"
                spellcheck="true" wrap="soft" style="resize: none;" placeholder="Type something here..."></textarea>

            <button type="submit" class="text-xl text-sky-600 hover:text-white px-3" id="send"><i
                    class="fa-solid fa-paper-plane"></i></button>


        </form>
    </div>

    <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/online.js') }}"></script>
   
</body>

</html>
