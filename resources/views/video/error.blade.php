<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oops! Wrong page</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.svg') }}"/>
  
  </head>
  
  <body class="antialiased bg-[#121212]"> 
    <div class='flex flex-col w-[90vw] h-screen justify-center items-center'>
        <h1 class='text-[8rem] text-red-600 font-extralight'>401</h1>
        <h3 class='text-zinc-400'>You're not allowed to join this call</h3>
        <a href='/' class='text-sm mt-10 text-green-600'><i class='fa-solid fa-house'></i> Go Back Home</a>
    </div>
</body>
</html>