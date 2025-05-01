@extends('layouts.dashboard')
@section('title', 'Dashboard Eventify')

@section('content')
    <div class="p-10">
        <div>
            <h1 class="text-3xl font-bold">List Events</h1>
        </div>
        <div class="overflow-x-auto mt-8 bg-white rounded-lg shadow">
            <table class="text-sm text-left text-gray-600">
                <thead class="bg-white text-xs uppercase text-gray-700">
                    <tr class="border-b border-gray-200">
                        @foreach (array_keys($events[0]) as $key)
                            <th class="px-6 py-3">{{ $key }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition duration-150">
                            @foreach ($event as $key => $value)
                                @if ($key === 'thumbnail')
                                    <td class="py-4 px-6">
                                        <img src="{{ $value }}" alt="{{ $event['title'] }}"
                                            class="w-24 h-16 object-cover rounded">
                                    </td>
                                @else
                                    <td class="px-6 py-4">{{ $value }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
