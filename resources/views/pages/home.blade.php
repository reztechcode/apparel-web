@extends('layouts.app')
@section('content')
    <div class="relative bg-cover bg-center h-screen"
        style="background-image: url('https://images.unsplash.com/photo-1523381294911-8d3cead13475?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="text-center text-white px-6 md:px-12 animate__animated animate__fadeIn">
                <h1 class="text-5xl lg:text-6xl font-extrabold mb-4">Temukan Produk</h1>
                <p class="text-lg lg:text-xl mb-8">Jelajahi berbagai produk apparel terbaik.</p>
                <a href="#movies" data-scroll-nav="1" class="btn btn-primary rounded-full transition duration-300 ease-in-out">
                    Mulai Menjelajah
                </a>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-8 mb-8" id="movies" data-scroll-index="1">
        <h1 class="lg:text-3xl text-xl font-bold text-center text-gray-800 leading-tight mt-12 mb-8">
            Temukan Produk Anda dengan Mudah disini
        </h1>
        <form action="{{ route('home.index') }}" method="GET">
            <div class="flex items-center justify-center mb-8 lg:p-0 px-3">
                <label class="input input-bordered flex items-center gap-2 rounded-3xl lg:w-1/2 w-full ">
                    <input id="search-input" type="text" name="search" class="grow p-2" placeholder="Cari Film Favorit Kamu" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                        <path fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </label>
            </div>
        </form>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 lg:gap-6 gap-3 px-2 lg:px-6">
            @forelse ($products as $item)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden movie-item">
                    <img src="https://images.unsplash.com/photo-1523381294911-8d3cead13475?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3"
                        alt="{{ $item->product_name }}"
                        class="w-80 object-cover transition duration-500 ease-in-out hover:scale-90 hover:rounded-lg">
                    <div class="p-4">
                        <a href="{{ url('/detail/' . $item->product_id) }}" class="block">
                            <h2
                                class="lg:text-xl text-lg font-semibold text-gray-900 hover:text-blue-600 transition duration-200 ease-in-out min-h-14 mb-2">
                                {{ $item->product_name }}
                            </h2>
                            <p class="font-medium text-gray-800 mt-2">Kategori:
                                @foreach ($item->categories as $category)
                                    <span class="text-gray-600">{{ $category->category_name }}, </span>
                                @endforeach
                            </p>
                            <p class="text-sm text-gray-500 mt-2">{{ $item->created_at }}</p>
                            <div class="flex items-center mt-2 mb-2">
                                <span class="text-blue-600 font-semibold">Size:</span>
                                <span class="ml-1">{{ $item->size->size_code }}</span>
                            </div>
                            <a href="{{ url('/detail/' . $item->product_id) }}"
                                class="btn btn-primary ml-auto rounded-full btn-sm md:text-md text-xs">Lihat
                                Selengkapnya</a>
                        </a>
                    </div>
                </div>
            @empty
                <h3>Maaf Data Tidak Ditemukan</h3>
            @endforelse

        </div>
        <div class="flex justify-center items-center">
            <a href="{{ url('#') }}" class="btn btn-primary mt-6 text-white text-center rounded-full">Lihat
                Lebih Banyak</a>
        </div>
    </div>
@endsection
