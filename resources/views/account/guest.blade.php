@extends('layouts.chat')

@section('content')
<div class='flex flex-col w-screen h-screen justify-center items-center'>
    <h1 class='text-[8rem] text-red-600 font-extralight errorText'>🙃</h1>
    <h3 class='text-zinc-400'>You are a guest user!</h3>
    <a href='/signup' class='text-lg font-medium mt-10 text-sky-600 callTA'>Sign Up</a>
</div>

<style>
.errorText {
    animation: 1000ms rotateFull infinite;
    animation-direction: alternate;
}
@keyframes rotateFull {
    0% {
        transform: rotateY(0deg);
    }
    100% {
        transform: rotateY(180deg);
    }
}
.callTA {
    animation: 1500ms bounce infinite;
}
@keyframes bounce {
    0% {
        transform: translateY(-5px);
    }
    50% {
        transform: translateY(5px);
    }
    100% {
        transform: translateY(-5px);
    }
}
</style>
@endsection