@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white shadow-md rounded-lg overflow-hidden">
    <div class="px-6 py-4">
        <h2 class="text-2xl font-semibold mb-2">User Profile</h2>
        <p class="text-gray-600 mb-6">Ini adalah data profil kamu.</p>

        <div class="border-t border-gray-200">
            <dl>
                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm font-medium text-gray-500">Username</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $username }}</dd>
                </div>
                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 border-t border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">Email</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">andini@gmail.com</dd>
                </div>
                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 border-t border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">Password</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">********</dd>
                </div>
            </dl>
        </div>

        <div class="mt-6 flex justify-end">
            <a href="#" class="inline-flex items-center px-4 py-2 bg-purple-600 hover:bg-purple-900 text-white text-sm font-medium rounded-md">
                Ubah
            </a>
        </div>
    </div>
</div>
@endsection
