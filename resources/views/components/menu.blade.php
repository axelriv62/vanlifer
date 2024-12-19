<!-- resources/views/components/menu.blade.php -->
<nav id="navbar">
    <div class="left">
        <div class="logo">
            <a href="/"><img class="logo" src="{{Vite::asset('resources/images/logo_blanc.png')}}" alt="Logo"></a>
        </div>
        <ul>
            <li><a href="/voyages">Voyages</a></li>
            <li><a href="/voyages/create">Créer un voyage</a></li>
        </ul>
    </div>
    <div class="right">
        @auth
            <p>Bonjour, <a href="/profil">{{ Auth::user()->name }}</p>
            <div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="background:none;border:none;color:inherit;padding:0;font:inherit;cursor:pointer;">Se déconnecter</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @else
            <p><a href="/login">Connexion</a></p>
        @endauth
    </div>
</nav>



<script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.height = "10vh";
            document.querySelector('ul').style.fontSize = "20px"
            document.querySelector(".right").style.fontSize = "20px";
            document.querySelector("#logo").style.scale = "1";
        } else {
            document.getElementById("navbar").style.height = "20vh";
            document.querySelector('ul').style.fontSize = "30px"
            document.querySelector(".right").style.fontSize = "30px";
            document.querySelector("#logo").style.scale = "1.3";
        }
    }
</script>

