@php
    $username = request()->query('username');
@endphp

<nav class="w-80 bg-white border-gray-100 shadow z-10">
    <div class="px-6 py-8 text-2xl font-bold">Eventify</div>
    <ul class="flex flex-col gap-5 px-4 py-5">
        <h2 class="p-2">Menu</h2>
        <li onclick="window.location='{{ route('dashboard', ['username' => $username]) }}'" class="flex items-center gap-3 hover:bg-[#F0F0F0] rounded-md p-2 cursor-pointer">
            <img src="https://cdn-icons-png.flaticon.com/512/9144/9144015.png" alt="Logo" class="w-5 h-5">
            <span class="text-gray-700">Dashboard</span>
        </li>
        <li onclick="window.location='{{ route('event', ['username' => $username]) }}'" class="flex items-center gap-3 hover:bg-[#F0F0F0] rounded-md p-2 cursor-pointer">
            <img src="https://cdn-icons-png.flaticon.com/512/6825/6825718.png" alt="Logo" class="w-5 h-5">
            <span class="text-gray-700">Event</span>
        </li>
        <li onclick="window.location='{{ route('category', ['username' => $username]) }}'" class="flex items-center gap-3 hover:bg-[#F0F0F0] rounded-md p-2 cursor-pointer">
            <img src="https://cdn-icons-png.flaticon.com/512/9485/9485721.png" alt="Logo" class="w-5 h-5">
            <span class="text-gray-700">Category</span>
        </li>
    </ul>
    <div class="flex flex-col gap-5 mt-auto px-4 py-5">
        <h2 class="p-2">Logout</h2>
        <li onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center gap-3 hover:bg-[#F0F0F0] rounded-md p-2 cursor-pointer">
            <img src="https://cdn-icons-png.flaticon.com/512/1286/1286853.png" alt="Logo" class="w-5 h-5">
            <span class="text-gray-700">Logout</span>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            @method('POST')
        </form>
    </div>
</nav>
