@extends('layouts.app')

@section('title', 'Coming Soon - My Blog')

@section('content')
<div class="text-center px-6">
    <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-pulse">
        🚀 Coming Soon
    </h1>
    <p class="text-lg md:text-xl mb-8 max-w-xl mx-auto">
        We're working hard to launch our new blog web app. Stay tuned for something amazing!
    </p>


    <blockquote class="max-w-2xl mx-auto bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-2xl shadow-lg">
        <p class="text-xl md:text-2xl italic leading-relaxed" id="quote-box">
            "Good things come to those who wait...
            but great things come to those who refresh this page daily."
        </p>
        <footer class="mt-4 text-sm opacity-80">— Mesbaa7 Blog's Team 😎</footer>
    </blockquote>
</div>

@endsection
