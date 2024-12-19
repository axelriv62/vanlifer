<!-- resources/views/components/menu.blade.php -->
<nav>
    <div class="left">
        <div class="logo">
            <a href="/"><img src="{{ asset('storage/images/logo.jpg') }}" alt="Logo"></a>
        </div>
        <ul>
            <li><a href="/voyages">Voyages</a></li>
            <li><a href="/voyages/create">Créer un voyage</a></li>
        </ul>
    </div>
    <div class="right">
        @auth
            <li><a href="/profil">{{ Auth::user()->name }}</li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="background:none;border:none;color:inherit;padding:0;font:inherit;cursor:pointer;">Se déconnecter</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @else
            <p><a href="/login">Connexion</a></p>
        @endauth
    </div>
</nav>
