@extends('layouts.app')

@section('content')

@if (!$user->isEmpty())
    <title>{{ $user[0]->username }}'s Profile</title>
<div class='flex flex-col h-[80vh] justify-center items-center mt-6'>
<img src="{{asset('/img/user.png')}}" class='p-6 w-2/3 lg:w-1/3 h-auto border-0 rounded-[50%] object-cover' alt='profile image'/>
<div class='text-sky-500 mt-2 w-full mx-9 lg:w-2/3 flex flex-row justify-around bg-zinc-700 py-5 rounded-2xl'>
    <h2 class='inline font-medium text-2xl'>{{ $user[0]->username }}</h2>
    <a href='/chats/{{ $user[0]->username }}' class='text-white text-xl' title='Text User'><i class="fa-solid fa-message"></i></a>
</div>
<!-- <div class='blur-sm bg-zinc-500 text-zinc-900 px-6 p-2 mt-6' id='email'>It's a secret!</div>
<button onclick='showemail()' class='text-xs font-medium mt-1' id="view">View email</button>
</div>

<script type="text/javascript">
    
    function showemail(){
        const email = document.getElementById('email')
        email.classList.remove('blur-sm')
    }
</script> -->
    
@else
    
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.jpeg') }}"/>
    <title>User Not Found!</title>
  </head>
  
  <body class="antialiased bg-[#121212]"> 
    <div class='flex flex-col w-screen h-[80vh] justify-center items-center'>
        <h1 class='text-[8rem] text-red-600 font-extralight'>404</h1>
        <h3 class='text-zinc-400'>The user doesn't exist here, try Twitter!</h3>
        <a href='/' class='text-sm mt-10 text-green-600'><i class='fa-solid fa-house'></i> Go Back Home</a>
    </div>

@endif


@endsection