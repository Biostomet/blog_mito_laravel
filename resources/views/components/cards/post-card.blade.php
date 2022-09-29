@props(['url_img', 'title', 'content'])
<div class="card w-96 bg-base-100 shadow-xl m-2">
    <img src="{{ asset('storage/' . $url_img) }}" alt="{{ $title }}" />
    <div class="card-body h-[220px]">
        <h2 class="card-title">{{ $title }}</h2>
        <p>{{ Str::substr($content, 0, 150) }}</p>
    </div>
</div>
