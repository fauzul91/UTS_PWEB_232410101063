@extends('layouts.dashboard')
@section('title', 'Dashboard Eventify')

@section('content')
    <div class="p-10">
        <div>
            <h1 class="text-3xl font-bold">List Categories</h1>
        </div>
        <div class="overflow-x-auto mt-8 bg-white rounded-lg shadow">
            <table class="text-sm text-left text-gray-600">
                <thead class="bg-white text-xs uppercase text-gray-700">
                    <tr class="border-b border-gray-200">
                        @foreach (array_keys($categories[0]) as $key)
                            <th class="px-6 py-3">{{ $key }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition ease-in-out duration-150">
                            @foreach ($category as $value)
                                <td class="px-6 py-4 w-full">{{ $value }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>
@endsection