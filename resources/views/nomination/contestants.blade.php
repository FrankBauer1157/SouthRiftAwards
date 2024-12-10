<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matatu Awards Contestants</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
@extends('layouts.app')

@section('content')
    <div class="grid w-full grid-cols-1 gap-4 p-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
        @foreach ($categories as $key => $category)
        @php
            // Array of colors to rotate
            $colors = ['bg-blue-500', 'bg-green-500', 'bg-yellow-500', 'bg-purple-500', 'bg-red-500', 'bg-indigo-500'];
            $colorClass = $colors[$key % count($colors)]; // Rotate colors
        @endphp
        <div class="overflow-hidden text-white transition-transform transform {{ $colorClass }} rounded-lg shadow-lg hover:scale-105">
            <div class="p-4">
                <h2 class="text-xl font-bold">{{ $category->name }}</h2>
            </div>
            <div class="p-4">
                @if ($category->id == 1)
                    <h3 class="text-lg font-semibold">Nominations for Category 1:</h3>
                    @if ($nominationsForCategory1->isEmpty())
                        <p class="text-gray-100">No nominations yet.</p>
                    @else
                        @foreach ($nominationsForCategory1 as $awardee)
                        <div class="flex items-center justify-between py-2">
                            <span class="text-lg font-semibold">{{ $awardee }}</span>
                            <span class="px-3 py-1 text-{{ explode('-', $colorClass)[1] }}-500 bg-white rounded-full shadow">
                                Nominations Pending
                            </span>
                        </div>
                        @endforeach
                    @endif
                @else
                    @if ($category->nominations->isEmpty())
                        <p class="text-gray-100">No nominations yet.</p>
                    @else
                        @foreach ($category->nominations as $nomination)
                        <div class="flex items-center justify-between py-2">
                            <span class="text-lg font-semibold">{{ $nomination->awardee_name }}</span>
                            <span class="px-3 py-1 text-{{ explode('-', $colorClass)[1] }}-500 bg-white rounded-full shadow">
                                {{ $nomination->nominations_count }} Nominations
                            </span>
                        </div>
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
        @endforeach
    </div>
@endsection

</html>
