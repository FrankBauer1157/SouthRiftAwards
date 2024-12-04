@extends('layouts.main')
@section('content')
<div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4">
    <div class="flex items-center justify-between p-4 text-white transition duration-300 bg-blue-500 rounded-lg shadow-md hover:bg-blue-600">
        <div>
            <h2 class="mb-2 text-xl font-semibold">Category A</h2>
            <p class="text-3xl font-bold">245</p>
        </div>
        <p class="text-lg font-semibold">25%</p>
    </div>
    <div class="flex items-center justify-between p-4 text-white transition duration-300 bg-green-500 rounded-lg shadow-md hover:bg-green-600">
        <div>
            <h2 class="mb-2 text-xl font-semibold">Category B</h2>
            <p class="text-3xl font-bold">180</p>
        </div>
        <p class="text-lg font-semibold">15%</p>
    </div>
    
    <div class="flex items-center justify-between p-4 text-white transition duration-300 bg-yellow-500 rounded-lg shadow-md hover:bg-yellow-600">
        <div>
            <h2 class="mb-2 text-xl font-semibold">Category C</h2>
            <p class="text-3xl font-bold">320</p>
        </div>
        <p class="text-lg font-semibold">30%</p>
    </div>
    <div class="flex items-center justify-between p-4 text-white transition duration-300 bg-red-500 rounded-lg shadow-md hover:bg-red-600">
        <div>
            <h2 class="mb-2 text-xl font-semibold">Category D</h2>
            <p class="text-3xl font-bold">90</p>
        </div>
        <p class="text-lg font-semibold">8%</p>
    </div>
    <div class="flex items-center justify-between p-4 text-white transition duration-300 bg-purple-500 rounded-lg shadow-md hover:bg-purple-600">
        <div>
            <h2 class="mb-2 text-xl font-semibold">Category E</h2>
            <p class="text-3xl font-bold">410</p>
        </div>
        <p class="text-lg font-semibold">38%</p>
    </div>
    <div class="flex items-center justify-between p-4 text-white transition duration-300 bg-orange-500 rounded-lg shadow-md hover:bg-orange-600">
        <div>
            <h2 class="mb-2 text-xl font-semibold">Category F</h2>
            <p class="text-3xl font-bold">140</p>
        </div>
        <p class="text-lg font-semibold">13%</p>
    </div>
    <div class="flex items-center justify-between p-4 text-white transition duration-300 bg-teal-500 rounded-lg shadow-md hover:bg-teal-600">
        <div>
            <h2 class="mb-2 text-xl font-semibold">Category G</h2>
            <p class="text-3xl font-bold">270</p>
        </div>
        <p class="text-lg font-semibold">25%</p>
    </div>
</div>

<table class="min-w-full mt-8 overflow-hidden rounded-lg shadow-lg bg-card text-card-foreground">
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
</table>

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
