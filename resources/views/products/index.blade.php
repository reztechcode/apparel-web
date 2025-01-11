@extends('layouts.app')
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-6">Daftar Produk</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md mb-4 inline-block">Tambah Produk</a>

    <div class="bg-white shadow-lg rounded-lg p-6">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="border-b px-4 py-2 text-left">Nama Produk</th>
                    <th class="border-b px-4 py-2 text-left">Ukuran</th>
                    <th class="border-b px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="border-b px-4 py-2">{{ $product->product_name }}</td>
                    <td class="border-b px-4 py-2">{{ $product->size->size_code }}</td>
                    <td class="border-b px-4 py-2">
                        <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection