@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-10">
            <!-- Kiri: Teks -->
            <div class="flex-1 text-center lg:text-left">
                <h2 class="text-3xl font-bold text-gray-800">Hai, {{ $username }}!</h2>
                <p class="text-gray-600 mt-2">Bagaimana kabarmu hari ini?</p>
                <div class="mt-4 flex justify-center lg:justify-start items-center gap-2">
                    <span class="text-red-500 text-lg">📌</span>
                    <span class="text-gray-700 text-sm">Beri tahu aku apa yang terjadi hari ini ya.</span>
                </div>
                <a href="/pengelolaan"
                   class="mt-6 inline-block bg-purple-600 text-white px-6 py-2 rounded-lg shadow hover:bg-purple-900 transition duration-300">
                    ✒️ Tulis Catatan Harian
                </a>
            </div>

            <!-- Kanan: Gambar -->
            <div class="flex-1">
                <img src="{{ asset('img/Diary-amico.png') }}" alt="Ilustrasi Diary" class="w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
@endsection
