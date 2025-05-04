@extends('layouts.dashboard')
@section('title', 'Dashboard Eventify')

@section('content')
    <div class="p-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-gradient-to-t from-gray-800 to-purple-600 text-white rounded-xl shadow p-6">
                <div class="flex items-center gap-4">
                    <div class="bg-white p-3 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135673.png" alt="Icons" class="w-5 h-5 ">
                    </div>
                    <div>
                        <p class="text-white text-sm mb-2">Total Revenue</p>
                        <p class="text-2xl font-bold">120.000 $</p>
                        <p class="text-green-500 text-sm mt-1">▲ 30.31%</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex items-center gap-4">
                    <div class="bg-gray-100 p-3 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/512/6825/6825718.png" alt="Icons" class="w-5 h-5 ">
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm mb-2">Events</p>
                        <p class="text-2xl font-bold">52</p>
                        <p class="text-green-500 text-sm mt-1">▲ 5.00%</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex items-center gap-4">
                    <div class="bg-gray-100 p-3 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" alt="Icons" class="w-5 h-5">
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm mb-2">Customers</p>
                        <p class="text-2xl font-bold">3400</p>
                        <p class="text-green-500 text-sm mt-1">▲ 11.01%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <div class="lg:col-span-2 bg-white rounded-xl shadow p-3">
                <div class="flex flex-col gap-4">
                    <p class="text-gray-800 text-xl font-bold ml-4">Top Events</p>
                    <div class="overflow-x-auto bg-white rounded-lg">
                        <table class="text-sm text-left text-gray-600 w-full">
                            <thead class="bg-white text-xs uppercase text-gray-700">
                                <tr>
                                    @foreach (array_keys($topEvents[0]) as $key)
                                        <th class="p-4">{{ $key }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topEvents as $topEvent)
                                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition duration-150">
                                        @foreach ($topEvent as $key => $value)
                                            @if ($key === 'thumbnail')
                                                <td class="p-4">
                                                    <img src="{{ $value }}" alt="{{ $topEvent['title'] }}"
                                                        class="w-24 h-16 object-cover rounded">
                                                </td>   
                                            @else
                                                <td class="p-4">{{ $value }}</td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-3">
                <p class="text-gray-800 text-xl font-bold ml-4">Recent Sales</p>
                <div class="flex flex-col p-5 gap-5">
                    @foreach ($transactions as $transaction)
                        <div class="flex items-center justify-between mt-3">
                            <div class="flex items-center gap-3">
                                <img src="{{ $transaction['image'] }}" class="w-10 h-10 rounded-full">
                                <div>
                                    <p class="font-medium text-gray-800">{{ $transaction['name'] }}</p>
                                    <p class="text-xs text-gray-500">{{ $transaction['time'] }}</p>
                                </div>
                            </div>
                            <div class="text-green-500 text-[0.8rem] font-semibold">
                                {{ $transaction['amount'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
