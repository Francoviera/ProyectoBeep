<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <script src="https://kit.fontawesome.com/4b4084f640.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/admin/jquery.mCustomScrollbar.concat.min.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/admin/material.min.js') }}" ></script>
    <script src="{{ asset('js/admin/sweetalert2.min.js') }}" ></script>
    <script src="{{ asset('js/admin/main.js') }}" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Beep Informatica</title>
  </head>
  <body>
    <div id= "app" >
        @yield('seccion')
    </div>
  </body>
</html>