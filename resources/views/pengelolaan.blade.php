@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('header')
    <x-header>Diary</x-header>
@endsection

@section('content')
    <div class="container mx-auto px-4 md:px-40">
        <h3 class="text-2xl font-light text-purple-1000 mb-6">Aku siap mendengarmu, {{ $nama }}!</h3>

        @foreach ($posts as $post)
            <div class="mb-6 border-b pb-4">
                <h2 class="text-xl font-bold text-purple-700 mb-1">
                    {{ $post['title'] }}
                </h2>
                <p class="text-sm text-gray-500 mb-2">
                    {{ $post['author'] }} | {{ $post['date'] }}
                </p>
                <p class="text-gray-800 mb-2">
                    {{ $post['body'] }}
                </p>
                <a href="#" class="text-blue-600 hover:underline">Read more »</a>
            </div>
        @endforeach

        <div class="flex justify-center my-8">
            <a href="{{ route('diary.create') }}" class="bg-purple-700 hover:bg-purple-800 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300">
                ✍️ Tulis Sesuatu
            </a>
        </div>
    </div>
@endsection

