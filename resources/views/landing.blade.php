@extends('layouts.landing')

@section('title', 'Selamat Datang')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-100 to-purple-300 py-10 px-4">
        <div class="bg-white shadow-xl rounded-3xl p-10 max-w-2xl w-full text-center">
            <h1 class="text-4xl font-extrabold text-purple-700 mb-4">
                📖 Selamat Datang di Aplikasi Diary
            </h1>
            <p class="text-lg text-gray-600 mb-6">
                Catat kisah harianmu dengan mudah, aman, dan penuh warna. Temukan ketenangan dalam setiap tulisan.
            </p>

            <a href="{{ route('login') }}"
                class="inline-flex items-center gap-2 bg-purple-600 hover:bg-purple-700 text-white text-lg font-semibold py-3 px-6 rounded-full transition duration-300 shadow-lg">
                🔐 Login Sekarang
            </a>

        </div>
    </div>
@endsection
