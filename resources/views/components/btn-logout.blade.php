<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
    @csrf

    {{-- <x-dropdown-link :href="route('logout')"
        onclick="event.preventDefault();
                      this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link> --}}
    <button type="submit">Déconnexion</button>

</form>
