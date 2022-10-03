<div class="overflow-x-auto mt-5">
    <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Date</th>
                <th>Publié</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @php
                $i = 1;
            @endphp
            @forelse ($posts as $post)
                <tr>
                    <th>{{ $i++ }}</th>
                    <td>{{ $post->title }}</td>
                    <td> {{ $post->created_at->format('d/m/Y') }} </td>
                    @if ($post->is_published == 0)
                        <td>
                            Non
                        </td>
                    @else
                        <td>
                            Oui
                        </td>
                    @endif

                </tr>
            @empty
                <tr>
                    <td>Pas de poste publié pour l'instant</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
