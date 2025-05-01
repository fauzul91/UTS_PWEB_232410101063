<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Default Title')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])   
    </head>
    <body class="min-h-screen flex font-poppins">
        <div class="w-1/2 flex flex-col justify-center items-center">    
            <div class="flex items-center mb-8 bg-white">
                <h1 class="text-3xl font-bold">Eventify</h1>
            </div>    
            <form method="POST" action="{{ route('login.submit') }}" class="w-full max-w-sm">
                @csrf
                <h2 class="text-3xl font-bold mb-8">Sign In</h2>
                <div class="mb-8">
                    <label for="username" class="block text-gray-700 opacity-70 text-md">Username</label>
                    <input type="username" id="username" name="username" placeholder="Denis" class="w-full border mt-4 border-gray-300 rounded text-md px-3 py-2" required>
                </div>
                <div class="mb-8">
                    <label for="password" class="block text-gray-700 opacity-70 text-md">Password</label>
                    <input type="password" id="password" name="password" placeholder="@#$/" class="w-full border mt-4 border-gray-300 rounded text-md px-3 py-2" required>
                </div>
                <button type="submit" class="w-full bg-black text-white px-4 py-3 rounded-2xl cursor-pointer hover:opacity-80 shadow-2xl transition ease-in-out duration-300">Sign In</button>
            </form>
        </div>
    
        <!-- Kanan: Info Menarik -->
        <div class="w-1/2 flex items-center justify-center bg-black p-8">
            <div class="text-center">
                <h2 class="text-7xl font-bold text-gray-300 mb-4 leading-tight">Selamat Datang di Eventify!</h2>                
            </div>
        </div>
    </body>
</html>