@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-center">Nominate a Contestant</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('nomination.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" id="category" class="form-select" required>
                    <option value="">-- Select a Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nominee Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter nominee's name" required>
            </div>

            <div class="mb-3">
                <label for="reason" class="form-label">Reason for Nomination</label>
                <textarea name="reason" id="reason" class="form-control" rows="4" placeholder="Explain why this nominee deserves to win" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit Nomination</button>
        </form>
    </div>
@endsection
