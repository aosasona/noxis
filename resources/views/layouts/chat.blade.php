<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Noxis is a quick, easy and anonymous message service for your professional & personal usage." />
    <meta name="keywords"
        content="Noxis, noxis, anonymous, ranch web, ranch twitter, ranch group, message, messaging, quick registration, chat, ranch chat, link chat, anon, quick convo, quick messaging, influencer medium, easy chat" />

    <!-- Facebook Metadata -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://noxis.chat/">
    <meta property="og:title" content="Start An Anonymous Convo!">
    <meta property="og:description"
        content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="og:image" content="{{ asset('img/favicon.svg') }}">

    <!-- Twitter Metadata -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://noxis.chat/">
    <meta property="twitter:title" content="Start An Anonymous Convo!">
    <meta property="twitter:description"
        content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="twitter:image" content="{{ asset('img/favicon.svg') }}">

    <!--General Metadata-->
    <meta property="og:site_name" content="Noxis">
    <meta property="og:site" content="https://noxis.chat">
    <meta property="og:title" content="Start An Anonymous Convo!">
    <meta property="og:description"
        content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
    <meta property="og:image" content="{{ asset('img/favicon.svg') }}">
    <meta property="og:url" content="https://noxis.chat">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.svg') }}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="antialiased bg-[#121212]">

    <!-- FontAwesome 5.15.3 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <div
        class="bg-zinc-800 fixed bottom-0 flex flex-row w-screen h-auto justify-evenly items-center py-3 lg:py-6 m-0 text-lg lg:text-xl text-white navFixed">
        <a href='/chats'><i class="fa-solid fa-message hover:text-sky-600"></i></a>
        <a href='/search'><i class="fa-solid fa-magnifying-glass hover:text-sky-600"></i></a>
        <a href='/users/{{ Cookie::get('username') }}'><i class="fa-solid fa-user hover:text-sky-600"></i></a>

        @if (strtolower(substr(Cookie::get('username'), 0, 5)) === "guest")
             <a href='{{ route('logout') }}'><i class="fa-solid fa-arrow-right-from-bracket text-red-600"></i></a>
        @endif
       
       

    </div>

    <div>
        @yield('content')
    </div>

</body>

</html>
