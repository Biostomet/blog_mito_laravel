<x-layouts.main-layout title="Création article">
    <x-navbar />
    <div class="container">
        <h1 class="pt-6 font-bold text-4xl pb-10">New post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="">
                {{-- title --}}
                <input type="text" class="block w-full rounded-lg border border-gray-400" name="title"
                    placeholder="Titre du post" value="{{ old('title') }}">
                <x-error-msg errorName='title' />
                {{-- content --}}
                <textarea class="mt-5 block w-full rounded-lg border border-gray-400" name="content" cols="30" rows="10"
                    placeholder="Votre contenu...">{{ old('content') }}</textarea>
                <x-error-msg errorName='content' />
                {{-- img --}}
                <input type="text" class="block w-full rounded-lg border border-gray-400" name="url_img"
                    placeholder="Url de votre image" value="https://source.unsplash.com/400x400/?animals?1">
                <button class="btn btn-primary mt-6 w-full">Envoyer</button>
            </div>
        </form>
    </div>
</x-layouts.main-layout>
