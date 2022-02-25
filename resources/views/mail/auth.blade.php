<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://ranch-beta.herokuapp.com/css/app.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body class="bg-white mx-2">
 
<center>
    <span class="text-zinc-700 font-normal text-xs mt-10">USE THIS OTP TO AUTHORIZE ACCESS TO YOUR NOXIS ACCOUNT.</span>
    <h1 class="text-black py-3 bg-gray-300 px-4 rounded-md text-3xl mt-3 font-medium">{{ $gen_code }}</h1>
<br/>
    <div class="text-red-600 text-xs font-normal mt-8">Do not share this code or email with ANYONE.</div>
</center>

</body>
</html>