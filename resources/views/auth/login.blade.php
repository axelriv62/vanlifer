<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
    @vite(['resources/css/login.css'])
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>

<body>
<div class="connexion">
    <aside class="left">
        <div class="formulaire">
            <div class="formulaireConnexion">
                <h2>Heureux de vous revoir !</h2>
                <p>Entrez vos informations de connexion</p>
                <form method="post" action="{{route('login')}}" class="signin visible">
                    @csrf
                    <div class="grp_input">
                        <label for="mail">Adresse mail</label>
                        <input id="mail" type="email" name="email">
                    </div>
                    <div class="grp_input">
                        <label for="pwd">Mot de passe</label>
                        <input type="password" id="pwd" name="password">
                    </div>
                    <div class="grp_input btn">
                        <input type="submit" name="connecter" value="Connexion">
                    </div>
                    <p class="signin">Pas de compte ? <a class="change1" href="#">Créez-en un !</a></p>
                </form>
            </div>
            <div class="formulaireInscription">
                <h2>On attendait plus que vous !</h2>
                <p>Créez un compte ici</p>
                <form method="post" action="{{route('register')}}" class="signup">
                    @csrf
                    <div class="grp_input">
                        <label for="name">Surnom</label>
                        <input id="name" type="text" name="name">
                    </div>
                    <div class="grp_input">
                        <label for="mail">Adresse mail</label>
                        <input id="mail" type="email" name="email">
                    </div>
                    <div class="grp_input">
                        <label for="pwd">Mot de passe</label>
                        <input type="password" id="pwd" name="password">
                    </div>
                    <div class="grp_input">
                        <label for="conf_pwd">Confirmation du mot de passe</label>
                        <input id="conf_pwd" type="password" name="password_confirmation" required />
                    </div>
                    <div class="grp_input btn">
                        <input type="submit" name="connecter" value="Connexion">
                    </div>
                    <p class="signin">Vous avez déja un compte ? <a class="change2" href="#">Connectez vous ! </a></p>
                </form>
            </div>
        </div>
    </aside>

    <aside class="right">
        {{--        <img src="{{asset('img/logopicture.png')}}"> METTRE LE LOGO DE L'APPLI--}}
        <p>LOGO</p>
        <script>
            const signin  = document.querySelector('.formulaireConnexion');
            const left = document.querySelector('.left');
            const right = document.querySelector('.right');
            const signup = document.querySelector('.formulaireInscription');
            const change1 = document.querySelector('.change1');
            const change2 = document.querySelector('.change2');
            change1.addEventListener('click', () => {
                left.classList.toggle('swapped_right');
                right.classList.toggle('swapped_left');
                signup.classList.toggle('visible');
                signin.classList.toggle('visible');
            })

            change2.addEventListener('click', () => {
                left.classList.toggle('swapped_right');
                right.classList.toggle('swapped_left');
                signup.classList.toggle('visible');
                signin.classList.toggle('visible');
            })
        </script>

        @if ($register == false)
            <script>
                addEventListener("DOMContentLoaded", () => {
                    document.querySelector('.formulaireConnexion').classList.toggle('visible')
                    change1();
                })
            </script>
        @else
            <script>
                addEventListener("DOMContentLoaded", () => {
                    document.querySelector('.formulaireInscription').classList.toggle('visible')
                    change2();
                })
            </script>
    @endif
</div>
</body>
</html>
