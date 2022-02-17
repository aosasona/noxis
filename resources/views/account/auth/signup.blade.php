@extends('layouts.app')

@section('content')
    <title>Authorize Access</title>
    <div class="flex w-screen h-[85vh] justify-center items-center px-4">

        <form method="POST" action="/users" class="bg-zinc-800 px-7 py-6 pb-9 rounded-xl w-full lg:w-2/3">

            <h1 class="font-medium text-4xl lg:text-5xl mb-8 p-4">Authorize Access</h1>

            <div class="lg:px-5">
                @csrf
                <div class="mb-2">

                    <div class='text-zinc-300 text-sm font-normal text-center pb-8 mt-3'>
                        A code has been sent to <span class='font-semibold text-sky-500'>{{ $email }}</span>. Please check your spam folder if you haven't received it yet.
                    </div>

                    <input type="text" name="auth_code" placeholder="X X X X X X X X" id="auth_code"
                        class="block w-[95%] bg-transparent text-gray-300 font-normal px-4 py-3 rounded-xl border-2 border-gray-500 focus:outline-none focus:border-sky-500 text-3xl text-center" required="required" />
                    <span class="text-xs font-medium text-red-500 pt-1 px-2" id="auth_error">{!! session()->get('authError') !!}</span>
                </div>

                <div class="flex flex-row justify-between items-center mt-10">
                    <a href="/signup" class="underline hover:text-sky-500">Go Back</a>
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
                Btn.innerText = 'Authorizing...';
                } else {
                    Btn.innerText = 'Authorize';
                }
            })
        </script>
    </div>
            @endsection
