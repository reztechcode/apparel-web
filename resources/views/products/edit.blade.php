@extends('layouts.app')
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-6">Edit Produk</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="product_name" class="block text-sm font-semibold text-gray-700">Nama Produk</label>
            <input type="text" name="product_name" id="product_name" class="mt-1 p-2 border w-full" value="{{ $product->product_name }}" required>
        </div>
        <div class="mb-4">
            <label for="size_id" class="block text-sm font-semibold text-gray-700">Ukuran ID</label>
            <input type="number" name="size_id" id="size_id" class="mt-1 p-2 border w-full" value="{{ $product->size_id }}" required>
        </div>
        <div class="mb-4">
            <label for="other_data" class="block text-sm font-semibold text-gray-700">Data Lain</label>
            <textarea name="other_data" id="other_data" class="mt-1 p-2 border w-full">{{ $product->other_data }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Update Produk</button>
    </form>
</div>
@endsection