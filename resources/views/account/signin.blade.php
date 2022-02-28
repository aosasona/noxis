@extends('layouts.app')

@section('content')
    <title>{{ config('app.name', 'Noxis') }} | Sign In</title>
    <div class="flex flex-col-reverse lg:flex-row w-screen h-screen justify-between items-center text-white">

        <div class="w-full h-full bg-transparent lg:bg-zinc-900 lg:flex lg:flex-col lg:items-center lg:justify-center hidden">
            <img src="{{ asset('img/laptop.png') }}" class="w-3/5 m-auto hidden lg:block" id="homeImg" />
        </div>

        <div class="w-full h-full flex flex-col items-center justify-center">
            <form method="POST" action="auth/signin" class="bg-zinc-800 px-5 py-6 pb-9 rounded-xl w-4/5">
                @csrf
                <h1 class="font-medium text-4xl lg:text-5xl mb-8 p-4">Sign In</h1>
                <div class="lg:px-5">

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-sky-600 mb-1 px-2">Email Address</label>
                        <input type="email" name="email" placeholder="johndoe@gmail.com" id="email"
                            class="block w-[95%] bg-transparent text-gray-300 font-normal px-4 py-3 rounded-xl border-2 border-gray-500 focus:outline-none focus:border-sky-600"
                            required="required" />
                        <span class="text-xs font-medium text-red-500 pt-1 px-2"
                            id="loginError">{!! session()->get('loginError') !!}</span>
                    </div>


                    <div class="flex flex-row justify-between items-center mt-10">
                        <a href="/signup" class="underline hover:text-sky-600">Create An Account</a>
                        <button type="submit" name="signin"
                            class="bg-sky-900 text-sky-400 px-5 py-2 rounded-lg text-lg hover:text-sky-900 hover:bg-sky-400 font-medium"
                            id="signin_btn">Sign In</button>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <noscript>You need javascript enabled to use this page</noscript>

    <script type="text/javascript">
        const emailField = document.getElementById('email');
        const Btn = document.getElementById('signin_btn');
        const emailError = document.getElementById('loginError');


        emailField.addEventListener('keyup', () => {
            const emailInput = emailField.value;

            if (emailInput.length < 6 && emailInput.length != 0) {
                emailError.innerText = "eMail address is too short";

            } else {
                const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            const emailString = String(emailInput);
            if (emailString.match(re)) {

                emailError.innerText = "";
            } else {
                emailError.innerText = "Invalid email address";

            }
        }
    })

    Btn.addEventListener('click', () => {
        const emailInput = emailField.value;
        if (emailInput.length != 0 && emailInput.length > 4) {
                const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                const emailString = String(emailInput);
                if (emailString.match(re)) {
                    Btn.innerText = "";
                    Btn.className = "loader"
                } else {
                    Btn.innerText = "Sign In";
                }
            } else {
                Btn.innerText = "Sign In";
            }

        })
    </script>
@endsection
