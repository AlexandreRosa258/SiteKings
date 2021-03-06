<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/brands.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/regular.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/solid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/svg-with-js.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/v4-shims.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        body{
            background:#0d47a1;
        }

    </style>

</head>
<body>
    <div id="app">
        <main class="py-4">
          
          @include('nav')
          @yield('content')

        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="{asset('materialize/js/materialize.js')}"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('materialize-css/js/materialize.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/tooltips.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/media.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dropdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sidenav.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slide.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modal.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modal2.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/characterCounter.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialbox.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datapiker.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gallery.js')}}"></script>




</body>
</html>
