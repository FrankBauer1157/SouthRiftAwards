@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">Vote for Your Favorite Contestants</h1>

    <div class="grid w-full grid-cols-1 gap-4 p-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
        @foreach ($categories as $category)
            <div class="overflow-hidden text-white transition-transform transform bg-blue-500 rounded-lg shadow-lg cursor-pointer hover:scale-105">
                <div class="p-4">
                    <h2 class="text-xl font-bold">{{ $category->name }}</h2>
                    <p class="text-lg">{{ $category->contestants->count() }} Contestants</p>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ($category->contestants as $contestant)
                            <li>
                                <form action="{{ route('vote.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                                    <input type="hidden" name="contestant_id" value="{{ $contestant->id }}">
                                    <button type="submit" class="btn btn-primary">{{ $contestant->name }} - Vote</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
