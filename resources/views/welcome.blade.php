@extends('layouts.app')

@section('content')

    <div class="welcome-container flex flex-col items-center justify-center h-screen md:mt-[-100px]">
        <div class="welcome-text text-center mt-8 md:mt-16 mb-8 text-white">
            <h1 class="text-2xl md:text-8xl font-bold">QR Code</h1>
            <div id="typed-strings">
                <p id="typed-text" class="text-lg md:text-2xl" style="font-size:30px;">Begin met uw <strong>gepersonaliseerde</strong> QR code te maken!</p>
            </div>
         
<span class="md:text-4xl" id="typed"></span>
        </div>

        <div class="welcome-buttons space-y-4 md:space-y-0 md:space-x-4">
            <a href="{{ route('login') }}" class="btn-primary text-lg md:text-xl px-6 md:px-8 py-3 md:py-4">Inloggen</a>
            <a href="{{ route('register') }}" class="btn-secondary text-lg md:text-xl px-6 md:px-8 py-3 md:py-4">Registreren</a>
        </div>
    </div>
@endsection
