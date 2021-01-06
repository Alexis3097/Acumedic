<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Not found</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
       
    </head>

    <body>
                   
    <div class="col-12 text-center">
        <h3 class="mt-3">404 | NOT FOUND</h3>
        <p class="text-muted mb-5">UPPS! Parce que no se ha encontrado la página que buscas</p>

        <a href="{{ route('inicio')}}" class="btn btn-lg btn-primary mt-4">Quiero regresar</a>
    </div>
    </body>
</html>