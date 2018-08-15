<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New User Registration</title>

        <link 
            rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
            crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">        
    </head>
    <body>
    <div class="container">
        <nav class="navbar navbar-expand-md">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler navbar-light ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Pricing <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn join-button">
                            <a class="nav-link" href="#">Join Now</a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row search-box">
            <div class="col-md-6">
                <span id="pro-logo"></span>
                <div class="dropdown">
                    <button 
                        class="btn btn-secondary dropdown-toggle" 
                        type="button" id="dropdownMenuButton" 
                        data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">
                        All
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">All</a>
                        <a class="dropdown-item" href="#">Graphics</a>
                        <a class="dropdown-item" href="#">Fonts</a>
                        <a class="dropdown-item" href="#">Templates</a>
                        <a class="dropdown-item" href="#">Add-Ons</a>
                        <a class="dropdown-item" href="#">Photos</a>
                    </div>
                </div><div id="search">
                    <form action="#" method="get">
                        <input type="text" name="search_text" id="search_text" placeholder="Search"/>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <ul class="list-inline search-links">
                    <li class="list-inline-item"><a href="#">Graphics</a></li>
                    <li class="list-inline-item"><a href="#">Fonts</a></li>
                    <li class="list-inline-item"><a href="#">Templates</a></li>
                    <li class="list-inline-item"><a href="#">Add-Ons</a></li>
                    <li class="list-inline-item"><a href="#">Photos</a></li>
                    <li class="list-inline-item"><a href="#">Themes</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 center-text">
                <h1>Get 3 free downloads!</h1>
                <p>Start your <strong>7-day trial</strong> to access thousands of curated photos, fonts, graphics and more to deliver quality designs faster.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4 entice-box">
                @yield('content')
            </div>
        </div>
        
    </div>
        </div>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
            crossorigin="anonymous"></script>
        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
            crossorigin="anonymous"></script>
        @yield('extra-js')
    </body>
</html>
