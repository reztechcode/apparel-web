<!doctype html>
<html data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparel - Temukan Fashion Terbaik untuk Anda!</title>
    <meta name="description"
        content="Aparel adalah platform terbaik untuk menemukan produk fashion yang sesuai dengan gaya Anda. Temukan koleksi terbaru, ulasan, dan rekomendasi produk hanya di sini.">
    <meta name="keywords" content="aparel, fashion, produk fashion, koleksi terbaru, rekomendasi fashion">
    <meta name="author" content="Tim Aparel">
    <link rel="canonical" href="https://aparel.rezweb.my.id">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @if (!Route::prefix('admin'))
        @include('components.footer')
    @endif
    @stack('js')
</body>

</html>
