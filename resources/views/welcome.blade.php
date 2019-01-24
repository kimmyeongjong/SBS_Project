<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Used-Auction</title>

        <script src="vue-instant/dist/vue-instant.browser.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- standard library -->
        <style>
         body{
              background-color:#c5f0ca;
         }

        </style>
    </head>
    <body>

        <div id="app"></div>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
                'user' => Auth::check(),
                'api_token' => (Auth::user()) ? Auth::user()->api_token : null
            ]) !!};

            function checkTest() {
                window.Laravel = {
                    'csrfToken' => csrf_token(),
                    'user' => Auth::check(),
                    'api_token' => (Auth::user()) ? Auth::user()->api_token : null
                }
            }

        </script>
    </body>
</html>
