<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .checkpoints {
                color: #636b6f;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hello World
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    <a href="/projects">Projects</a>
                </div>
                <div class="checkpoints">
                <h1>CheckPoint 1 List</h1>
                    <ul>
                        <li><a href="/welcome">Routing (Routes/web.php :: Line 27 or Routes/Console.php :: php artisan foobar)</a></li>
                        <br>
                        <li><a href="/projects">Layout files with Blades (resources/views/layout.blade.php)</a></li>
                        <br>
                        <li><a href="/welcome">Sending Data To Views (Http/Controllers/PagesController.php :: Line 13)</a></li>
                        <br>
                        <li><a href="/welcome">Controllers (Http/Controllers/PagesController.php :: Line 13)</a></li>
                        <br>
                        <li><a href="/projects/create">Database integration through migration and Eloquent ORM (database/migrations/create{users/projects/tasks})</a></li>
                        <br>
                        <li><a href="/projects/create">Forms With CSRF proctection and Data modification (resources/views/projects/create.blade.php)</a></li>
                        <br>
                        <li><a href="/projects/create">Data Cleansing and validation (Http/Controllers/ProjectsController.php :: Line 60)</a></li>
                        <br>
                        <li><a href="/register">Registration and Authentication ((Http/Controllers/ProjectsController.php :: Line 21)</a></li>
                        <br>
                        <li><a href="/projects/3">Authorisation and Laravel Gate (GATE Providers/AuthServiceProvider.php :: Line 25  Authorisation Http/Controllers/ProjectsController.php :: Line 15/16  and Line 56)</li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
