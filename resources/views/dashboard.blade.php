<x-layouts.main-layout title="Dashboard">
    <x-navbar />
    <div class="container">
        <h1>Bienvenue {{ Auth::user()->name }} sur ton Dashboard</h1>
        <div class="py-12 flex flex-col">
            <a href="{{ route('posts.create') }}">New Post</a>
            <a href="{{ route('posts.all') }}">Liste des postes</a>
            <a href="{{ route('users.all') }}">Liste des utilisateurs</a>
        </div>
    </div>
</x-layouts.main-layout>
