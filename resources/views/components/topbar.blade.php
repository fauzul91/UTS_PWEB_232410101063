@php
    $username = request()->query('username');
@endphp

@vite('resources/js/dropdown-profile.js')
<header class="bg-white shadow px-10 py-6    flex justify-between items-center w-full">
    <div>
        <h2 class="text-xl font-semibold text-gray-800">Selamat Datang, {{ request('username')}}!</h2>
    </div>  
    <div class="relative">
        <button id="profileDropdownButton" class="flex items-center gap-5">
            <img src="https://cdn-icons-png.flaticon.com/512/552/552721.png" alt="Profile" class="w-8 h-8 rounded-full">
            <span class="text-gray-700 font-medium">{{ request('username') }}</span>
            <svg id="dropdownIcon" class="w-4 h-4 cursor-pointer ml-1 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div id="profileDropdownMenu" class="hidden absolute right-0 mt-5 w-54 rounded-2xl bg-white shadow-lg z-50">            
            <div class="flex flex-col gap-2 p-5">
                <a onclick="window.location='{{ route('profile', ['username' => $username]) }}'" class="block p-3 rounded-2xl text-[1rem] text-gray-800 hover:bg-gray-100 hover:shadow-xs cursor-pointer transition ease-in-out duration-200">Profile</a>
                <a onclick="window.location='{{ route('logout')}}'" class="block p-3 rounded-2xl text-[1rem] text-gray-800 hover:bg-gray-100 hover:shadow-xs cursor-pointer transition ease-in-out duration-200">Logout</a>
            </div>
        </div>
    </div>
</header>
<script src="{{ asset('js/dropdown-profile.js') }}"></script>