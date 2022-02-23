<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="RanCh is a quick, easy and anonymous message service for your professional & personal usage." />
    <meta name="keywords"
        content="RanCh, ran-ch, anonymous, ranch web, ranch twitter, ranch group, message, messaging, quick registration, chat, ranch chat, link chat, anon, quick convo, quick messaging, influencer medium, easy chat" />

    <!-- Facebook Metadata -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ran-ch.com/">
    <meta property="og:title" content="Start An Anonymous Convo!">
    <meta property="og:description"
        content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="og:image" content="{{ asset('img/favicon.jpeg') }}">

    <!-- Twitter Metadata -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ran-ch.com/">
    <meta property="twitter:title" content="Start An Anonymous Convo!">
    <meta property="twitter:description"
        content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="twitter:image" content="{{ asset('img/favicon.jpeg') }}">

    <!--General Metadata-->
    <meta property="og:site_name" content="RanCh">
    <meta property="og:site" content="https://ran-ch.com">
    <meta property="og:title" content="Start An Anonymous Convo!">
    <meta property="og:description"
        content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="og:image" content="{{ asset('img/favicon.jpeg') }}">
    <meta property="og:url" content="https://ran-ch.com">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.jpeg') }}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="antialiased bg-[#121212]">

    <!-- FontAwesome 5.15.3 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />


    <div>
        @yield('content')
    </div>

    <div class="sticky bottom-0">
        <form method="POST" action="/chats" enctype="multipart/form-data" class="bg-zinc-800 flex flex-row w-screen h-auto justify-around items-center py-2 lg:py-2 m-0 text-lg lg:text-xl text-white">
        
                @csrf
                <label for="attachment" class="px-2"><i class="fa-solid fa-link"></i></label>
                <input type="file" name="attachment" class="hidden" id="attachment"/>
                <input type="text" name="chat_content" id="chat_content" class="w-4/5 px-2 py-3 text-sm text-white bg-zinc-700 focus:outline-none"/>
                <button type="submit" class="text-xl text-sky-600 px-2" id="send"><i class="fa-solid fa-paper-plane"></i></button>
               
          
         </form>
            </div>

          <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>  
</body>

</html>
