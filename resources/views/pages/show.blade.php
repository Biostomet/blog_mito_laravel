<x-layouts.main-layout :title="$post->title">
    <x-navbar />
    <div class="card w-96 bg-base-100 shadow-xl m-2">
        <figure><img src="{{ $post->url_img }}" alt="{{ $post->title }}" /></figure>
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <div class="pt-8">
                <x-btn-delete :post="$post" />
                <a href="{{ $post->id }}/edit" class="btn btn-success">Modifier</a>
            </div>
        </div>
    </div>
</x-layouts.main-layout>
