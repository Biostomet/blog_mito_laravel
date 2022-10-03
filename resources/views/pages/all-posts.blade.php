<x-layouts.main-layout title="Tous mes articles">
    <x-navbar />
    <div class="container">
        <h1>Tous mes articles</h1>
        @include('partials._table-allPOsts')
        <div class="mt-5">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div>
</x-layouts.main-layout>
