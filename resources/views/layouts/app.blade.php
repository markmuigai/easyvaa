<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Venyu</title>

    <!-- Scripts -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<style type="text/css">
    .header li{
        margin-right: 2em;
    }

/*    .col-md-8.venueform, .container.myvenues, .container.myvenue{
        margin-top: 3em;
    }*/


    
    input.form-control{
        border: 0px; 
        border-radius: 0px; 
        border-bottom: 1px solid blue;
    }

    #dropdownMenuLink{
      margin-right: 1em;
    }

    #flash-message{
        position: absolute;
        z-index: 10;
        bottom: 20px;
        right: 70px;
    }

    .jumbotron.landingpage{
background-image: url("https://images.unsplash.com/photo-1519226612673-73c0234437ef?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9dcb31a62d4d016bf6c442fc6143e811&auto=format&fit=crop&w=1050&q=80");
background-size: cover;}
</style>
<body>
    <div id="app">
        @include('layouts.nav')
        @yield('content')
    </div>
        <!-- Scripts -->
        <script>
          $('.dropdown-toggle').dropdown();
          
          $('.your-checkbox').prop('indeterminate', true)
        </script>
</body>
</html>
