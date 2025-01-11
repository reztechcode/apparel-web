@extends('layouts.app')
@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-6">Edit Warna</h1>

    <form action="{{ route('colors.update', $color) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="color_name" class="block text-sm font-semibold text-gray-700">Nama Warna</label>
            <input type="text" name="color_name" id="color_name" class="mt-1 p-2 border w-full" value="{{ $color->color_name }}" required>
        </div>

        <div class="mb-4">
            <label for="color_code" class="block text-sm font-semibold text-gray-700">Kode Warna</label>
            <input type="text" name="color_code" id="color_code" class="mt-1 p-2 border w-full" value="{{ $color->color_code }}" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Update Warna</button>
    </form>
</div>
@endsection