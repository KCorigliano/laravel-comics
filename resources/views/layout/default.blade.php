<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center header-navbar">
                <div class="logo">
                    <img class="img-fluid" src="{{ asset('images/dc-logo.png')}}" alt="">
                </div>
                <div class="links">
                    <a href="">CHARACTERS</a>
                    <a href="">COMICS</a>
                    <a href="">MOVIES</a>
                    <a href="">TV</a>
                    <a href="">GAMES</a>
                    <a href="">COLLECTIBLES</a>
                    <a href="">VIDEOS</a>
                    <a href="">FANS</a>
                    <a href="">NEWS</a>
                    <a href="">SHOP</a>
                </div>
                <div>
                    <input class="header-search" type="text" placeholder="Search">
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>