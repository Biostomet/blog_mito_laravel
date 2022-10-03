<div class="overflow-x-auto mt-5">
    <table class="table w-full">
        <!-- head -->
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Mail</th>
                <th>Mail vérifié</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @php
                $i = 1;
            @endphp
            @forelse ($users as $user)
                <tr>
                    <th>{{ $i++ }}</th>
                    <td>{{ $user->name }}</td>
                    <td> {{ $user->email }} </td>
                    @if ($user->email_verified_at == null)
                        <td>
                            Non vérifié
                        </td>
                    @else
                        <td>
                            {{ $user->email_verified_at->format('d/m/Y') }}
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
