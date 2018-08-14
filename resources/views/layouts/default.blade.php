<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New User Registration</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                        <a href="{{ url('/') }}">Link1</a>
                        <a href="{{ url('/') }}">Link2</a>
                        <a href="{{ url('/') }}">Link3</a>
                </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        @yield('extra-js')
    </body>
</html>
