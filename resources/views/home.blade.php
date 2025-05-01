@extends('layouts.app')

@section('title', 'Event Management')

@section('content')
    <div class="bg-black flex flex-col gap-5 items-center justify-center h-[100vh]">
        <h1 class="font-bold text-7xl text-white">Event Management</h1>
        <p class="text-xl text-white">Saksikan Acara Paling Menarik dan Populer Hingga Mancanegara</p>
        <a href="{{ route('login') }}" class="px-6 py-4 bg-gray-800 mt-5 text-white text-xl rounded-full font-semibold text-shadow-md hover:opacity-80">Login disini le!</a>
    </div>
@endsection