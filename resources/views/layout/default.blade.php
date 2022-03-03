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
        <div class="jumbotron">
        </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="footer-left">
                    <div>
                        <h3>DC COMICS</h3>
                        <p>Characters</p>
                        <p>Comics</p>
                        <p>Movies</p>
                        <p>TV</p>
                        <p>Games</p>
                        <p>Videos</p>
                        <p>News</p>
                        <h3>SHOP</h3>
                        <p>Shop DC</p>
                        <p>Shop DC Collectables</p>
                    </div>
                    <div>
                        <h3>DC</h3>
                        <p>Termo of use</p>
                        <p>Privacy policy (New)</p>
                        <p>Ad Choices</p>
                        <p>Adverstising</p>
                        <p>Jobs</p>
                        <p>Subscriptions</p>
                        <p>Talent Workshops</p>
                        <p>CPSC Certificates</p>
                        <p>Ratings</p>
                        <p>Shop Help</p>
                        <p>Contact Us</p>
                    </div>
                    <div>
                        <h3>SITES</h3>
                        <p>DC</p>
                        <p>MAD Magazine</p>
                        <p>DC Kids</p>
                        <p>DC Universe</p>
                        <p>DC Power Visa</p>
                    </div>
                </div>
                <div class="footer-right">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>