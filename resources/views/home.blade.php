@extends('layouts.app')

@section('content')
    <div class="welcome-container flex flex-col items-center justify-center h-screen mt-[-100px]">
        <div class="welcome-text text-center mt-16 mb-8 text-white">
            <h1 class="text-8xl font-bold">Welkom</h1>
            <p class="text-3xl">Leuk dat je er bent! Log in of registreer om verder te gaan.</p>
        </div>

        <div class="welcome-buttons space-x-4">
            <a href="{{ route('login') }}" class="btn-primary text-xl px-8 py-4">Inloggen</a>
            <a href="{{ route('register') }}" class="btn-secondary text-xl px-8 py-4">Registreren</a>
        </div>
    </div>
@endsection
