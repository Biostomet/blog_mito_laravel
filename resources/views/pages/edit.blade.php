<x-layouts.main-layout title="Création article">
    <x-navbar />
    <div class="container">
        <h1 class="pt-6 font-bold text-4xl pb-10">Update post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
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
                <div class="mt-4">
                    <label for="">Choisir une image</label>
                    <input type="file" name="url_img" class="block" id="">
                    <x-error-msg errorName="url_img" />
                </div>
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
