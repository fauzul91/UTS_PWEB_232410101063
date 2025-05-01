@extends('layouts.dashboard')
@section('title', 'Eventify')

@section('content')
    <div class="p-10">
        <div>
            <h1 class="text-3xl font-bold">Profile</h1>
        </div>
        <div class="mt-5">
            <img src="https://cdn-icons-png.flaticon.com/512/552/552721.png" alt="Profile" class="w-20 h-20 rounded-full">
            <div class="my-8">
                <label for="username" class="block text-gray-700 opacity-70 text-md">Username</label>
                <h1 class="w-full border mt-4 border-gray-300 rounded text-md p-3">{{ request('username') }}</h1>
            </div>
        </div>
    </div>
@endsection
