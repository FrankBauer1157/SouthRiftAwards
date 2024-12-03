@extends('layouts.main')

@section('content')
<div class="mx-5 mt-5">
    <!-- <h3 class="mb-4 text-center">SOUTH-RIFT MATATU AWARDS - 2024</h3> -->

    @foreach ($categories as $category)
    <div class="mb-5">
        <h4 class="font-bold">{{ $category->name }}</h4>
        @if ($category->nominations->isEmpty())
            <p class="text-muted">No nominations yet for this category.</p>
        @else
        <div class="table-responsive">
                <table class="table table-sm mt-3 table-bordered table-hover">
                    <thead class="table-primary">
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
            </div>
        @endif
    </div>
@endforeach


</div>
@endsection
