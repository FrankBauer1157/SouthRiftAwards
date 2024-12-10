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
<div class="container mx-auto">
    <div class="grid w-full grid-cols-1 gap-4 p-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
        @foreach ($categories as $category)
        <div class="overflow-hidden text-white transition-transform transform bg-blue-500 rounded-lg shadow-lg hover:scale-105">
            <div class="p-4">
                <h2 class="text-xl font-bold">{{ $category->name }}</h2>
                <p class="text-sm">{{ $category->nominations_count }} Nominations</p>
                <!-- Button to Open Modal -->
                <button
                    class="px-4 py-2 mt-2 text-blue-500 bg-white rounded-lg hover:bg-gray-200"
                    @click="openModal({{ $category->id }})">
                    View Nominations
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
        x-show="showModal"
        x-transition>
        <div class="w-full max-w-2xl p-6 bg-white rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold" x-text="modalTitle"></h2>
                <button class="text-gray-500 hover:text-gray-700" @click="showModal = false">✖</button>
            </div>
            <table class="w-full mt-4 border border-collapse border-gray-300 table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 border border-gray-300">Awardee</th>
                        <th class="px-4 py-2 border border-gray-300">Nominations Count</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="nomination in nominations" :key="nomination.id">
                        <tr>
                            <td class="px-4 py-2 border border-gray-300" x-text="nomination.name"></td>
                            <td class="px-4 py-2 border border-gray-300" x-text="nomination.count"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('modal', () => ({
            showModal: false,
            modalTitle: '',
            nominations: [],
            openModal(categoryId) {
                this.showModal = true;
                this.modalTitle = 'Nominations for Category ' + categoryId;

                // Fetch nominations for the selected category using AJAX
                fetch(`/categories/${categoryId}/nominations`)
                    .then(response => response.json())
                    .then(data => {
                        this.nominations = data;
                    })
                    .catch(error => {
                        console.error('Error fetching nominations:', error);
                    });
            },
        }));
    });
</script>

</html>
