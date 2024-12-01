@extends('layouts.app')
{{-- @extends('layouts.main') <!-- Extend the main layout --> --}}

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@section('content')
    <h1 class="mb-5 text-center">Vote for Your Favorite Nominee</h1>

    <div class="row">
        @foreach($categories as $category)
            <div class="mb-4 col-md-4">
                <div class="card category-card">
                    <div class="card-body">
                        <h5 class="text-center card-title">{{ $category->name }}</h5>
                        <form action="{{ route('vote.submit') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nominee_id" class="form-label">Select Nominee</label>
                                <select name="nominee_id" id="nominee_id" class="form-select" required>
                                    <option value="">-- Select a Nominee --</option>
                                    @foreach($category->nominees as $nominee)
                                        <option value="{{ $nominee->id }}">{{ $nominee->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="identifier" class="form-label">Enter Your Voting Code</label>
                                <input type="text" class="form-control" id="identifier" name="identifier" placeholder="e.g. 1234" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Vote Now</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if(session('success'))
        <div class="mt-4 alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
@endsection

