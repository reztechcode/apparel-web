@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', function() {
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                    setTimeout(() => {
                        mobileMenu.classList.remove('max-h-0');
                        mobileMenu.classList.add('max-h-96');
                    }, 10);
                } else {
                    mobileMenu.classList.remove('max-h-96');
                    setTimeout(() => {
                        mobileMenu.classList.add('max-h-0');
                        mobileMenu.classList.add('hidden');
                    }, 500);
                }
            });
        });
    </script>
@endpush
<nav class="bg-gray-800 text-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Brand -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="text-2xl font-bold">
                    Apparel
                </a>
            </div>
            <!-- Hamburger Menu for Mobile -->
            <div class="md:hidden">
                <button id="mobile-menu-button" type="button"
                    class="text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-4">
                <a href="/"
                    class="px-3 py-2 rounded-full text-sm font-medium {{ Request::is('/') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">Home</a>
                <a href="/about"
                    class="px-3 py-2 rounded-full text-sm font-medium {{ Request::is('about') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">About</a>
                <a href="/contact"
                    class="px-3 py-2 rounded-full text-sm font-medium {{ Request::is('contact') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">Contact</a>
                <a href="{{ auth()->check() ? '/admin/dashboard' : '/auth/login' }}"
                    class="px-3 py-2 rounded-full bg-white  text-black text-sm font-semibold {{ Request::is('auth/login') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">{{ auth()->check() ? 'Dashboard' : 'Login' }}</a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-gray-700">
            <a href="/"
                class="block px-3 py-2 rounded-full text-base font-medium {{ Request::is('/') ? 'bg-gray-600' : 'hover:bg-gray-600' }}">Home</a>
            <a href="/about"
                class="block px-3 py-2 rounded-full text-base font-medium {{ Request::is('about') ? 'bg-gray-600' : 'hover:bg-gray-600' }}">About</a>
            <a href="/contact"
                class="block px-3 py-2 rounded-full text-base font-medium {{ Request::is('contact') ? 'bg-gray-600' : 'hover:bg-gray-600' }}">Contact</a>
        </div>
    </div>
</nav>
