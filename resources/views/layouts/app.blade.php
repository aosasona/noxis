<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Noxis is a quick, easy and anonymous message service for your professional & personal usage."/>
  <meta name="keywords" content="Noxis, noxis, anonymous, Noxis web, Noxis twitter, Noxis group, message, messaging, quick registration, chat, Noxis chat, link chat, anon, quick convo, quick messaging, influencer medium, easy chat"/>

    <!-- Facebook Metadata -->
     <meta property="og:type" content="website">
     <meta property="og:url" content="https://noxis.chat/">
     <meta property="og:title" content="Noxis - Quick, Easy & Anonymous Conversations">
     <meta property="og:description" content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
     <meta property="og:image" content="{{ asset('img/5.png') }}">

     <!-- Twitter Metadata -->
     <meta property="twitter:card" content="summary_large_image">
     <meta property="twitter:url" content="https://noxis.chat/">
     <meta property="twitter:title" content="Noxis - Quick, Easy & Anonymous Conversations">
     <meta property="twitter:description" content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
     <meta property="twitter:image" content="{{ asset('img/5.png') }}">

     <!--General Metadata-->
     <meta property="og:site_name" content="Noxis">
     <meta property="og:site" content="https://noxis.chat">
     <meta property="og:title" content="Noxis - Quick, Easy & Anonymous Conversations">
     <meta property="og:description" content="Noxis is a quick, easy and anonymous messaging service for your professional & personal usage.">
     <meta property="og:image" content="{{ asset('img/5.png') }}">
     <meta property="og:url" content="https://noxis.chat">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.svg') }}"/>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="antialiased bg-[#101010]"> 
  <div class="fixed top-0 z-[1] navBar">
    <nav class="flex flex-row w-screen justify-between items-center h-12 lg:h-14 p-1 px-3 lg:px-12 box-border bg-[#151515]">
       
        <a href="/" class="no-underline h-4/5"><img src="{{ asset('img/logo.svg') }}" alt="Logo" class="h-full"/></a>
        {{-- <div>
        @if(Cookie::get('username') == null)
        <a href="/signin" class="text-blue-500 hover:text-blue-700 text-sm font-medium px-3">Sign In</a>
        <a href="/signup" class="text-blue-500 hover:text-blue-700 text-sm font-medium px-3">Sign Up</a>
        @else
        <a href="/users/{{ Cookie::get('username') }}" class="text-blue-500 hover:text-blue-700 text-sm font-medium px-3">My Profile</a>
        <a href="{{ route('logout') }}" class='text-red-500 text-sm font-medium px-3 hover:text-red-700'>Log Out</a>
        @endif
        </div> --}}
    
    </nav>  
</div> 

    <div class="mt-8">
    @yield('content')
    </div>
    
</body>
</html>