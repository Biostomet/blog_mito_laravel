<x-layouts.main-layout title="Acceuil">
    <x-navbar />
    <p class="text-indigo-500 text-center text-4xl pt-10 pb-10 font-black">Blog Mito Laravel</p>
    <div class="flex flex-wrap" id="container_card">
        @forelse ($posts as $post)
            <a href="posts/{{ $post->id }}">
                <x-cards.post-card :content="$post->content" :title="$post->title" :url_img="$post->url_img" />
            </a>
        @empty
            <p>Aucun article disponible</p>
        @endforelse
        <div class="">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div>
</x-layouts.main-layout>
