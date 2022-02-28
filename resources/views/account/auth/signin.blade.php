@extends('layouts.app')

@section('content')
    <title>Authorize Access</title>
    <div class="flex flex-col-reverse lg:flex-row w-screen h-screen justify-between items-center text-white">

        <div class="w-full h-full bg-transparent lg:bg-zinc-900 lg:flex lg:flex-col lg:items-center lg:justify-center hidden">
            <img src="{{ asset('img/laptop.png') }}" class="w-3/5 m-auto hidden lg:block" id="homeImg" />
        </div>
    
        <div class="w-full h-full flex flex-col items-center justify-center">

        <form method="POST" action="/signin-auth" class="bg-zinc-800 px-5 py-6 pb-9 rounded-xl w-[90%] lg:w-4/5">
            @csrf
            <h1 class="font-medium text-3xl lg:text-5xl mb-6 p-4">Authorize Access</h1>

            <div class="lg:px-5">
               
                <div class="mb-2">

                    <div class='text-zinc-300 text-sm font-normal text-center pb-8 mt-3'>
                        A code has been sent to <span class='font-semibold text-sky-600'>{{ $email }}</span>. Please check your spam folder if you haven't received it yet.
                    </div>

                    <input type="text" name="auth_code" placeholder="X X X X X X X X" id="auth_code"
                        class="block w-[95%] bg-transparent text-gray-300 font-normal px-4 py-3 rounded-xl border-2 border-gray-500 focus:outline-none focus:border-sky-600 text-3xl text-center" required="required" />
                    <span class="text-xs font-medium text-red-500 pt-1 px-2" id="auth_error">{!! session()->get('authError') !!}</span>
                </div>

                <div class="flex flex-row justify-between items-center mt-10">
                    <a href="/signin" class="underline hover:text-sky-600">Go Back</a>
                <button type="submit" name="signup" class="bg-sky-900 text-sky-400 px-5 py-2 rounded-lg text-lg hover:text-sky-900 hover:bg-sky-400 font-medium" id="auth_btn">Authorize</button>
                </div>

            </div>
        </form>

        <noscript>You need to have Javascript enabled</noscript>

        <script type="text/javascript">
            const auth_error = document.getElementById('auth_error');
            const auth = document.getElementById('auth_code');
            const Btn = document.getElementById('auth_btn');
            
            auth.addEventListener('keyup', () => {
                const authValue = auth.value;
                if(authValue.length < 8 && authValue.length != 0) { 
                    auth_error.innerText = 'Invalid Authorization code';
                } else {
                    auth_error.innerText = '';
                }
            })

            Btn.addEventListener('click', () => {
                const authValue = auth.value;
                if(authValue.length >= 8 && authValue.length != 0) { 
                    Btn.innerText = "";
                    Btn.className = "loader"
                } else {
                    Btn.innerText = 'Authorize';
                }
            })
        </script>
    </div>
            @endsection
