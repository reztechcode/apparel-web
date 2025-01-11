@extends('layouts.app')
@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold mb-6">Tambah Produk</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="product_name" class="block text-sm font-semibold text-gray-700">Nama Produk</label>
                <input type="text" name="product_name" id="product_name" class="mt-1 p-2 border w-full" required>
            </div>

            <div class="flex flex-col">
                <div class="mb-3">
                    <label for="size_id" class="label">
                        <span class="label-text">Ukuran</span>
                    </label>
                    <select name="size_id" id="size_id" class="select select-bordered w-full">
                        @foreach ($sizes as $item)
                            <option value="{{ $item->size_id }}"
                                {{ old('genre_id') == $item->size_id ? 'selected' : '' }}>
                                {{ $item->size_code }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-4">
                <label for="other_data" class="block text-sm font-semibold text-gray-700">Data Lain</label>
                <textarea name="other_data" id="other_data" class="mt-1 p-2 border w-full"></textarea>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Simpan Produk</button>
        </form>
    </div>
@endsection
