<div class="navbar bg-base-100">
    <div class="flex-1" id="logo">
        <a class="btn btn-ghost normal-case text-xl" href="/">BlogMito</a>
    </div>
    <div class="flex-none" id="navitem">
        <ul class="menu menu-horizontal p-0">
            <li><a href="{{ route('posts.create') }}">Create</a></li>
            <li tabindex="0">
                @guest
                    <a>
                        Pouette
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2 bg-base-100">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        {{-- <li><a href="{{ route('logout') }}">Log Out</a></li> --}}
                    </ul>
                @endguest
            </li>
            @auth
                <x-btn-logout />
                <span>
                    {{ Auth::user()->name }}
                </span>
                <a href="/dashboard">Dashboard</a>
            @endauth
        </ul>
    </div>
</div>
