@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ $product->title }}</h1>
        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
        <p class="font-bold mb-4">Price: <span class="text-green-500">${{ $product->price }}</span></p>
        @if ($product->image_path)
            <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->title }}" class="mb-4 w-1/2 rounded-lg shadow">
        @endif
        <div class="mt-4">
            <a href="{{ route('products.index') }}" class="text-blue-500 hover:underline mr-4">Back to List</a>
            <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:underline mr-4">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:underline">Delete</button>
            </form>
        </div>
    </div>
@endsection
