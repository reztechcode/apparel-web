@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-6">Edit Kategori</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="category_name" class="block text-sm font-semibold text-gray-700">Nama Kategori</label>
            <input type="text" name="category_name" id="category_name" class="mt-1 p-2 border w-full" value="{{ $category->category_name }}" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Update Kategori</button>
    </form>
</div>
@endsection