<x-layouts.main-layout title="Création article">
    <x-navbar />
    <div class="container">
        <h1 class="pt-6 font-bold text-4xl pb-10">Update post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="">
                {{-- title --}}
                <input type="text" class="block w-full rounded-lg border border-gray-400" name="title"
                    placeholder="Titre du post" value="{{ old('title', $post->title) }}">
                <x-error-msg errorName='title' />
                {{-- content --}}
                <textarea class="mt-5 block w-full rounded-lg border border-gray-400" name="content" cols="30" rows="10"
                    placeholder="Votre contenu...">{{ old('content', $post->content) }}</textarea>
                <x-error-msg errorName='content' />
                {{-- img --}}
                <input type="text" class="block w-full rounded-lg border border-gray-400" name="url_img"
                    placeholder="Url de votre image" value="https://source.unsplash.com/400x400/?animals?1">
                {{-- is_published --}}
                <div class="">
                    <label for="">Publication</label>
                    <input @checked(old('is_published', $post->is_published)) type="checkbox" name="is_published" value="is_published">
                </div>
                <button class="btn btn-primary mt-6 w-full">Envoyer</button>
            </div>
        </form>
    </div>
</x-layouts.main-layout>
