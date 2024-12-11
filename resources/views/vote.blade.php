@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Vote for Your Favorite Contestants</h1>

    @foreach ($categories as $category)
        <div class="mt-5 category">
            <h2>{{ $category->name }}</h2>
            <div class="row">
                @foreach ($category->contestants as $contestant)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $contestant->name }}</h5>
                                <form method="POST" action="{{ route('vote.store') }}">
                                    @csrf
                                    <input type="hidden" name="contestant_id" value="{{ $contestant->id }}">
                                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                                    <div class="mb-3">
                                        <label for="voter_identifier" class="form-label">Your Identifier (e.g., Email)</label>
                                        <input type="text" class="form-control" id="voter_identifier" name="voter_identifier" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Vote</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection
