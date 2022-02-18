<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="RanCh is a quick, easy and anonymous message service for your professional & personal usage."/>
  <meta name="keywords" content="RanCh, ran-ch, anonymous, ranch web, ranch twitter, ranch group, message, messaging, quick registration, chat, ranch chat, link chat, anon, quick convo, quick messaging, influencer medium, easy chat"/>

    <!-- Facebook Metadata -->
     <meta property="og:type" content="website">
     <meta property="og:url" content="https://ran-ch.com/">
     <meta property="og:title" content="Ranch - Quick, Easy & Anonymous Conversations">
     <meta property="og:description" content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage.">
     <meta property="og:image" content="{{ asset('img/favicon.jpeg') }}">

     <!-- Twitter Metadata -->
     <meta property="twitter:card" content="summary_large_image">
     <meta property="twitter:url" content="https://ran-ch.com/">
     <meta property="twitter:title" content="Ranch - Quick, Easy & Anonymous Conversations">
     <meta property="twitter:description" content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage.">
     <meta property="twitter:image" content="{{ asset('img/favicon.jpeg') }}">

     <!--General Metadata-->
     <meta property="og:site_name" content="RanCh">
     <meta property="og:site" content="https://ran-ch.com">
     <meta property="og:title" content="RanCh - Quick, Easy & Anonymous Conversations">
     <meta property="og:description" content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage.">
     <meta property="og:image" content="{{ asset('img/favicon.jpeg') }}">
     <meta property="og:url" content="https://ran-ch.com">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.jpeg') }}"/>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="antialiased bg-[#121212]"> 
    <div class="sticky top-0 z-[1]">
    <nav class="flex flex-row w-screen justify-between items-center h-12 lg:h-14 p-1 px-3 lg:px-12 box-border bg-white">
       
        <a href="/" class="no-underline h-2/3"><img src="{{ asset('img/favicon.jpeg') }}" alt="Logo" class="h-full"/></a>
        <div>
        @if(session()->get('loggedIn') != true)
        <a href="/signin" class="text-blue-500 hover:text-blue-700 text-sm font-medium px-3">Sign In</a>
        <a href="/signup" class="text-blue-500 hover:text-blue-700 text-sm font-medium px-3">Sign Up</a>
        @else
        <a href="/users/{{ session()->get('username') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium px-3">My Profile</a>
        @endif
        </div>
    
    </nav>  
</div> 
    <div class="mx-1 my-4 lg:my-8 lg:mx-20 xl:mx-80 text-white">
    @yield('content')
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>