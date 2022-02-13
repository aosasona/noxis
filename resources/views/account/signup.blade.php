@extends('layouts.app')

@section('content')

<div class="flex w-screen h-[85vh] justify-center items-center px-4">
<form method="POST" onsubmit="return false;" class="bg-zinc-800 px-7 py-6 pb-9 rounded-xl w-full lg:w-2/3">
    <h1 class="font-medium text-4xl lg:text-5xl mb-8 p-4">Sign Up</h1>
    <div class="lg:px-5">

    <div class="mb-4">
    <label for="email" class="block text-sm font-medium text-sky-500 mb-1 px-2">Email Address</label>
    <input type="email" name="email" placeholder="johndoe@gmail.com" id="email" class="block w-[95%] bg-transparent text-gray-300 font-normal px-4 py-3 rounded-xl border-2 border-gray-500 focus:outline-none focus:border-sky-500" required="required"/> 
    <span class="text-xs font-medium text-red-500 pt-1 px-2" id="email_error"></span>
    </div>

    <div class="mb-4">
    <label for="username" class="block text-sm font-medium text-sky-500 mb-1">Preferred Username</label>
    <input type="text" name="username" placeholder="johndoe29" id="username" class="block w-5/6 mb-4 bg-transparent text-gray-300 font-normal px-4 py-3 rounded-xl border-2 border-gray-500 focus:outline-none focus:border-sky-500" required="required"/>
    <span class="text-xs font-medium text-red-500 pt-1 px-2" id="user_error"></span>
    </div>


    <div class="flex flex-row justify-between items-center mt-10">
        <a href="/signin" class="underline hover:text-sky-500">Sign In Instead</a>
    <button type="submit" name="signup" class="bg-sky-900 text-sky-400 px-5 py-2 rounded-lg text-lg hover:text-sky-900 hover:bg-sky-400" onclick="signup_auth()" id="signup_btn">Next</button>
    </div>
    </div>
</form>
</div>


<noscript>You need javascript enabled to use this page</noscript>

<script type="text/javascript">
    const emailField = document.getElementById('email');
    const userField = document.getElementById('username');
    const Btn = document.getElementById('signup_btn');
    const emailError = document.getElementById('email_error');
    const userError = document.getElementById('user_error');

    emailField.addEventListener('keyup', () => {
        const emailInput = emailField.value;
       
        if(emailInput.length < 6 && emailInput.length != 0) { 
            emailError.innerText = "eMail address is too short";
            Btn.disabled = true;
            } else {
                const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                const emailString = String(emailInput);
                if(emailString.match(re)) {
                    Btn.disabled = false;
                    emailError.innerText = "";
                } else {
                    emailError.innerText = "Invalid email address";
                    Btn.disabled = true;
                }
        }
    })

    userField.addEventListener('keyup', () => {
        const userInput = userField.value;

        if(userInput.length <= 3 && userInput.length != 0) {
            Btn.disabled = true;
            userError.innerText = `Username is too short (${userInput.length})`;
        } else {
            userError.innerText = "";
            Btn.disabled = false;
        }
    })

</script>

@endsection