<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://ranch-beta.herokuapp.com/css/app.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Auth Mail</title>
</head>
<body class="bg-white mx-2">
    <?php
    session_start();
       
    //generate numbers
    $gen = uniqid(rand(), false);
      $gen_c = substr($gen, 0, 3);
      $gen_d = substr($gen, -2);
    //generate alphabets
      $alph = array("a", "b", "c", "d", "e", "f", "g", "v", "z", "x", "m", "n", "p", "A", "Z", "V", "B", "C", "D", "E", "F", "G", "H", "M", "N", "K");
      $rand_keys = array_rand($alph, 3);

      $gen_code = $alph[$rand_keys[0]].$alph[$rand_keys[1]].$gen_c.$alph[$rand_keys[2]].$gen_d;
    ?>
    <img src="https://ranch-beta.herokuapp.com/img/favicon.jpeg" alt="Logo" class="h-12 w-12 object-cover px-4 p-4"/>

</br>

<h1 class="text-lg font-medium text-zinc-800 mt-7">Account Authorization</h1>
<center>
    <span class="text-zinc-700 font-light text-xs mt-10">USE THIS OTP TO AUTHORIZE YOUR ACCOUNT</span></br>
    <h1 class="text-black py-3 bg-gray-300 px-4 rounded-md text-3xl">{{ $gen_code }}</h1>

    <div class="text-red-600 text-xs font-normal mt-18">Do not share this code or email with ANYONE. We will not contact you by any means to ask for your code!</div>
</center>

</body>
</html>