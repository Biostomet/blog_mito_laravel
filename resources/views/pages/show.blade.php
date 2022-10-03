<x-layouts.main-layout :title="$post->title">
    <x-navbar />
    <div class="card w-96 bg-base-100 shadow-xl m-2">
        <figure><img src="{{ asset('storage/' . $post->url_img) }}" alt="{{ $post->title }}" /></figure>
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <div class="pt-8">
                <x-btn-delete :post="$post" />
                <a href="{{ $post->id }}/edit" class="btn btn-success">Modifier</a>
            </div>
        </div>
        <div class="my-14 bg-blue-100 p-5">
            <h2 class="text-4xl font-black">Commentaires</h2>

            @auth
                <form action="{{ route('comment.store', $post->id) }} " method="POST">
                    @csrf
                    <input type="text" placeholder="Votre commentaire" name="content">
                    <x-error-msg errorName='content' />
                    <button class="btn-primary btn" type="submit">Envoyer</button>
                </form>
            @endauth

            <div class="">
                @forelse ($post->comments as $comment)
                    <div class="mb-2 p-4">
                        <p class="bg-white"> {{ $comment->content }} </p>
                        <p> {{ $comment->created_at->format('d/m/Y') }} </p>
                    </div>
                @empty
                    <p>Soyez le premier à écrire un commentaire</p>
                @endforelse
            </div>
        </div>
    </div>
</x-layouts.main-layout>
