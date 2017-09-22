<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <a href="{{ Route('admin.home') }}">Admin</a>
        
        @can('AdmMaster')
            <p>Administrador master</p>
        @endcan

        @can('Admr')
            <p>Administrador</p>
        @endcan

        @can('user')
            <p>Usuario</p>
        @endcan
    </body>
</html>
