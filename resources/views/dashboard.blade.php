@extends('layouts.main')
@section('content')


@php
    // Define background colors
    $bgColors = ['bg-blue-500', 'bg-green-500', 'bg-yellow-500', 'bg-red-500', 'bg-purple-500', 'bg-orange-500', 'bg-teal-500'];
@endphp

<div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4">
    @foreach($categories as $index => $category)
        <div class="flex items-center justify-between p-4 text-white transition duration-300 {{ $bgColors[$index % count($bgColors)] }} rounded-lg shadow-md hover:{{ str_replace('-500', '-600', $bgColors[$index % count($bgColors)]) }}">
            <div>
                <h2 class="mb-2 text-xl font-semibold">{{ $category->name }}</h2>
                <p class="text-3xl font-bold">{{ $category->nominations_count }}</p>
            </div>
            <p class="text-lg font-semibold">
                {{ round(($category->nominations_count / $totalNominations) * 100, 2) }}%
            </p>
        </div>
    @endforeach
</div>
<div class="p-6 rounded-lg shadow-lg bg-background text-primary-foreground">
    <div class="mb-4 border-b border-border">
        <nav class="flex space-x-2">
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 rounded-lg border-primary focus:outline-none bg-primary text-primary-foreground hover:bg-primary/80">Tab 1</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 2</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 3</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 4</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 5</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 6</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 7</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 8</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 9</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 10</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 11</button>
            <button class="w-1/12 px-4 py-2 text-center transition border-b-2 border-transparent rounded-lg focus:outline-none hover:border-primary hover:bg-accent hover:text-accent-foreground">Tab 12</button>
        </nav>
    </div>
    <div class="py-4">
        <table class="w-full rounded-lg shadow-md bg-card">
            <thead>
                <tr class="bg-muted text-muted-foreground">
                    <th class="p-3 text-left border-b border-border">Header 1</th>
                    <th class="p-3 text-left border-b border-border">Header 2</th>
                    <th class="p-3 text-left border-b border-border">Header 3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="transition hover:bg-muted/50">
                    <td class="p-3 border-b border-border">Data 1</td>
                    <td class="p-3 border-b border-border">Data 2</td>
                    <td class="p-3 border-b border-border">Data 3</td>
                </tr>
                <tr class="transition hover:bg-muted/50">
                    <td class="p-3 border-b border-border">Data 4</td>
                    <td class="p-3 border-b border-border">Data 5</td>
                    <td class="p-3 border-b border-border">Data 6</td>
                </tr>
                <tr class="transition hover:bg-muted/50">
                    <td class="p-3 border-b border-border">Data 7</td>
                    <td class="p-3 border-b border-border">Data 8</td>
                    <td class="p-3 border-b border-border">Data 9</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


{{-- <table class="min-w-full mt-8 overflow-hidden rounded-lg shadow-lg bg-card text-card-foreground">
    <thead class="bg-primary text-primary-foreground">
        <tr>
            <th class="px-4 py-3 text-sm font-semibold uppercase">ID</th>
            <th class="px-4 py-3 text-sm font-semibold uppercase">Name</th>
            <th class="px-4 py-3 text-sm font-semibold uppercase">Quantity</th>
        </tr>
    </thead>
    <tbody>
        <tr class="bg-white">
            <td class="px-4 py-3">1</td>
            <td class="px-4 py-3">Product A</td>
            <td class="px-4 py-3">10</td>
        </tr>
        <tr class="bg-zinc-50">
            <td class="px-4 py-3">2</td>
            <td class="px-4 py-3">Product B</td>
            <td class="px-4 py-3">5</td>
        </tr>
        <tr class="bg-white">
            <td class="px-4 py-3">3</td>
            <td class="px-4 py-3">Product C</td>
            <td class="px-4 py-3">8</td>
        </tr>
        <tr class="bg-zinc-50">
            <td class="px-4 py-3">4</td>
            <td class="px-4 py-3">Product D</td>
            <td class="px-4 py-3">12</td>
        </tr>
    </tbody>
</table> --}}

   {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="container mt-4">
                    <h2 class="text-center">Dashboard</h2>
                    <h3 class="mt-4">Nomination Summary</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Number of Nominations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->nominations_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection
