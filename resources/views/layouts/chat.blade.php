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

    <div
        class="bg-zinc-800 fixed bottom-0 flex flex-row w-screen h-auto justify-evenly items-center py-3 lg:py-6 m-0 text-lg lg:text-xl text-white">
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
