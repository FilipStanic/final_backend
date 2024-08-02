@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Photography Product</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mx-auto p-6">
    <div class="flex flex-col items-center justify-center bg-indigo-300 p-8 rounded-lg shadow-md w-11/12 max-w-md mx-auto">

    <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Create Photography Product</h1>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="w-full space-y-4">
            @csrf

            <div>
                <label class="block font-medium text-gray-800 mb-1">Title:</label>
                <input type="text" name="title" required class="border border-gray-300 rounded-md p-2 w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block font-medium text-gray-800 mb-1">Description:</label>
                <textarea name="description" required class="border border-gray-300 rounded-md p-2 w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div>
                <label class="block font-medium text-gray-800 mb-1">Price:</label>
                <input type="text" name="price" required class="border border-gray-300 rounded-md p-2 w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter price"> <!-- Changed to text input -->
            </div>

            <div>
                <label class="block font-medium text-gray-800 mb-1">Image:</label>
                <input type="file" name="image" required class="border border-gray-300 rounded-md p-2 w-full text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block font-medium text-gray-800 mb-1">Category:</label>
                <select name="category_id" required class="border border-gray-300 rounded-md p-2 w-full text-black bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ ucfirst($category->name) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 transition duration-200">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
@endsection
