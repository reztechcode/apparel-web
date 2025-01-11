@extends('layouts.app')
@section('content')
<div
    class="gap-y-16 grid grid-cols-1 lg:grid-cols-2 max-w-7xl mx-auto gap-x-10 xl:gap-x-28 lg:p-10 items-center xl:p-20">
    <div class="bg-white p-5 lg:p-10 rounded-2xl">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="flex flex-col gap-y-7">
                <h3 class="xl:text-4xl md:text-3xl text-2xl text-indigo-950 font-bold leading-relaxed">
                    Masuk <br class="lg:block hidden">
                </h3>
                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-4 rounded-lg">
                        <p>{{ $errors->first('email') }}</p>
                    </div>
                @endif
                <div>
                    <label class="font-semibold text-indigo-950 text-base mb-2">
                        Email Address
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full py-3 rounded-full pl-5 pr-10 border border-gray-300 text-indigo-950 font-semibold">
                </div>
                <div class="justify-end flex flex-col">
                    <label class="font-semibold text-indigo-950 text-base mb-2">
                        Password
                    </label>
                    <input type="password" name="password"
                        class="w-full py-3 rounded-full pl-5 pr-10 border border-gray-300 text-indigo-950 font-semibold">
                    <a href="#" class="text-sm text-blue-700 text-right mt-1">Forgot Password</a>
                </div>
                <div class="flex flex-col gap-y-4">
                    <button type="submit"
                        class="w-full text-center px-7 rounded-full text-base py-3 font-semibold text-white btn btn-primary">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </div>
    <img src="{{ asset('assets/img/otp-security.png') }}" alt="login-image" class="lg:block hidden">
</div>
@endsection
