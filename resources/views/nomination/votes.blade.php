<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matatu Awards Contestants</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
@extends('layouts.main')

@section('content')
<div class="grid w-full grid-cols-1 gap-4 p-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
    @foreach ($categoriesWithVotes as $category)
    @php
        $colors = ['bg-blue-500', 'bg-green-500', 'bg-yellow-500', 'bg-purple-500', 'bg-red-500', 'bg-indigo-500'];
        $colorClass = $colors[$loop->index % count($colors)];
    @endphp
    <div class="overflow-hidden text-white transition-transform transform {{ $colorClass }} rounded-lg shadow-lg hover:scale-105 cursor-pointer" data-bs-toggle="modal" data-bs-target="#categoryModal{{ $category->id }}">
        <div class="p-4">
            <h2 class="text-xl font-bold">{{ $category->name }}</h2>
            <p class="text-lg">{{ $category->contestants->count() }} Contestants</p>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="categoryModal{{ $category->id }}" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">{{ $category->name }} - Contestants</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($category->contestants->isEmpty())
                        <p>No contestants yet.</p>
                    @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Contestant</th>
                                <th>Contestant</th>
                                <th>Votes</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category->contestants as $contestant)
                                <tr>
                                    <td>      @if ($contestant->image_url)
                                        <img src="{{ asset('drivers/' . $contestant->image_url) }}"
                                             alt="{{ $contestant->name }}"
                                             class="object-cover w-10 h-10 ml-3 border rounded-full">
                                    @else
                                        <img src="{{ asset('default.png') }}"
                                             alt="Default Image"
                                             class="object-cover w-10 h-10 ml-3 border rounded-full">
                                    @endif</td>
                                    <td>{{ $contestant->name }}</td>
                                    <td>{{ $contestant->vote_count }}</td>
                                    <td>{{ $contestant->vote_count > 0 ? 'Voted' : 'Not Voted' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection


</html>
