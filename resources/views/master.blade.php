<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pentol</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
        </div>
        <div class="search-bar">
            <input type="search" placeholder="Search online concert...">
        </div>
        @guest
            <ul class="menu">
                <li><a href="{{ url('login') }}">Login</a></li>
                <li><a href="{{ url('register') }}">Register</a></li>
            </ul>
        @else
            <div class="dropdown">
                <a class="profile dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-picture" title="Luki Centuri (10$)">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="username">{{ Auth::user()['name'] }}</div>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('profile') }}">
                        <i class="fa fa-user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{ url('my-ticket') }}">
                        <i class="fa fa-ticket"></i> My Ticket
                    </a>
                    <a class="dropdown-item text-danger" href="{{ url('logout') }}">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </div>
            </div>
        @endguest
    </header>
    @yield('content')
</body>
</html>
