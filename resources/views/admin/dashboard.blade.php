@extends('layouts.app')
@section('content')
<main class="flex-grow p-6 bg-gray-100 min-h-screen">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Example Card -->
        <div class="p-6 bg-white shadow-md rounded-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Total Produk</h3>
            <p class="mt-2 text-3xl font-bold text-indigo-600">{{ $productCount }}</p>
        </div>
        <div class="p-6 bg-white shadow-md rounded-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Total Kategori</h3>
            <p class="mt-2 text-3xl font-bold text-green-600">{{ $categoryCount }}</p>
        </div>
        <div class="p-6 bg-white shadow-md rounded-2xl">
            <h3 class="text-lg font-semibold text-gray-700">Total Warna</h3>
            <p class="mt-2 text-3xl font-bold text-red-600">{{ $colorCount }}</p>
        </div>
    </div>
</main>
@endsection