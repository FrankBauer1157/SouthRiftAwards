<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matatu Awards Contestants</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
@extends('layouts.main')

@section('content')
    <div class="grid w-full grid-cols-1 gap-4 p-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
        @foreach ($categoriesWithNominations as $category)
        @php
            // Array of colors to rotate
            $colors = ['bg-blue-500', 'bg-green-500', 'bg-yellow-500', 'bg-purple-500', 'bg-red-500', 'bg-indigo-500'];
            $colorClass = $colors[$loop->index % count($colors)]; // Rotate colors
        @endphp
        <div class="overflow-hidden text-white transition-transform transform {{ $colorClass }} rounded-lg shadow-lg hover:scale-105 cursor-pointer" data-toggle="modal" data-target="#categoryModal{{ $category->id }}">
            <div class="p-4">
                <h2 class="text-xl font-bold">{{ $category->name }}</h2>
                <p class="text-lg">{{ $category->nominations->count() }} Nominations</p>
            </div>
        </div>

        <!-- Modal for displaying detailed nominations -->
        <div class="modal fade" id="categoryModal{{ $category->id }}" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">{{ $category->name }} - Nominations</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($category->nominations->isEmpty())
                            <p>No nominations yet.</p>
                        @else
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nominee</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category->nominations as $nomination)
                                        <tr>
                                            <td>{{ $nomination->wkfld }}</td>
                                            <td>Other details go here</td> <!-- Add any additional details here -->
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
