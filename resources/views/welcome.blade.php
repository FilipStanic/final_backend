@extends('layouts.app')

@section('content')
    <div class="container mx-auto flex justify-center items-center min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/background.jpg') }}');">
        <div class="text-center">
            <h1 class="text-8xl font-bold text-white mb-8">Echoes</h1>
            @if (Route::has('login'))
                <div class="space-x-4">
                </div>
            @endif
        </div>
    </div>
@endsection
