<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyBand</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <script link="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('modules/navbar')
        </div>
    </body>
</html>
