<x-layouts.main-layout title="Tous mes users">
    <x-navbar />
    <div class="container">
        <h1>Tous mes utilisateurs</h1>
        @include('partials._table-allUsers')
        <div class="mt-5">
            {{ $users->links('pagination::tailwind') }}
        </div>
    </div>
</x-layouts.main-layout>
