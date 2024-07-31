@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex justify-center items-center min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/background.jpg') }}');">
        <div class="text-center">
            <h1 class="text-8xl font-bold text-white mb-8">Echoes</h1>
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-lg text-white bg-blue-600 hover:bg-blue-500 rounded px-4 py-2">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-lg text-white bg-blue-600 hover:bg-blue-500 rounded px-4 py-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-lg text-white bg-blue-600 hover:bg-blue-500 rounded px-4 py-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
@endsection
