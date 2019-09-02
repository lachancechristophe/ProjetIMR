<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .info {
                text-align: left;
                padding: 0 10%;
            }

            .font-weight-bold {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Test de BDD avec Laravel
                </div>

                <div class="links">
                    <a href="/bouees">Gestion des bouées</a>
                    <a href="/donnee_bouees">Gestions des données des bouées</a>
                </div>

                <hr/>

                <div class="border-info m-b-md info">
                    Assurez-vous d'avoir créé la base de données telle qu'elle est décrite dans le fichier .env
                    Pour pouvoir fonctionner sans modifications, cette appli Laravel à besoin :
                    <ul>
                        <li>D'un compte dans la base de donnée <span class="font-weight-bold">postgresql</span> nommé <span class="font-weight-bold">userLambda</span>.</li>
                        <li>Que ce compte soit protégé par le mot de passe <span class="font-weight-bold">datenbankschlussel</span>.</li>
                        <li>Que la base de données soit ouverte sur le port <span class="font-weight-bold">5432</span> à l'adresse <b class="font-weight-bold">127.0.0.1</b>.</li>
                    </ul>
                    Une fois tous ces préalables en place, il est évidemment à prendre en compte que toute modification
                    d'une clé étrangère doit être en adéquation avec la clé primaire à laquelle elle est liée. Ça évitera
                    des remarques bêtes comme «&nbsp;Bah ça marche pas&nbsp;» juste à cause d'un mauvais identifiant… Je
                    le rappelle parce que mon collègue de projet PHP de S2 m'a prouvé que ce n'est pas évident pour tout
                    le monde…
                </div>

                <!--
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                -->
            </div>
        </div>
    </body>
</html>
