@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4 text-center">SOUTH-RIFT MATATU AWARDS - 2024</h3>

    @foreach ($categories as $category)
    <div class="mb-5">
        <h2 class="text-lg font-bold">{{ $category->name }}</h2>
        @if ($category->nominations->isEmpty())
            <p class="text-muted">No nominations yet for this category.</p>
        @else
            <table class="table mt-3 table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                            <th>Nominee Name</th>
                            <th>Reason</th>
                            <th>Location</th>
                            <th>Nominated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category->nominations as $index => $nominee)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $nominee->name }}</td>
                        <td>{{ $nominee->reason }}</td>
                        <td>{{ $nominee->ip_address ?? 'Unknown' }}</td>
                        <td>{{ $nominee->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        @endif
    </div>
@endforeach


</div>
@endsection
