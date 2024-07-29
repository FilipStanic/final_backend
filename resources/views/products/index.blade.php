@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex flex-col items-center justify-center max-w-xl mx-auto text-center mb-6">
            <h1 class="text-3xl text-white font-bold mb-4">Photos For Sale</h1>
            <a href="{{ route('products.create') }}" class="text-white bg-blue-600 hover:bg-blue-500 rounded px-4 py-2">
                Create New Product
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($products as $product)
                <div class="bg-white bg-gradient-to-r from-orange-100 to-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold">{{ $product->title }}</h2>
                    <p class="text-gray-700 mb-2">Category: <span class="font-bold text-gray-800">{{ ucfirst($product->category->name) }}</span></p>
                    <p class="text-gray-700">{{ $product->description }}</p>
                    <p class="font-bold mb-2">Price: <span class="text-green-500">${{ $product->price }}</span></p>
                    @if ($product->image_path)
                        <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->title }}" class="mb-2 w-full h-48 object-cover rounded">
                    @endif
                    <div class="mt-4">
                        <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:underline">View</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
