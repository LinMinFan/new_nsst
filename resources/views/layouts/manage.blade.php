<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="This is the new iNSST community system." name="description"/>
    <meta content="imin" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('meta')

    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/font-awesome/font-awesome-6.4.2.min.css') }}" rel="stylesheet" type="text/css"/>

    @stack('css')

</head>
<body>
    
    <header>
        @include('site.partials.header')
    </header>

    <section>
        @yield('content')
    </section>

    <footer>
        @include('site.partials.footer')
    </footer>

    <script src="{{ asset('js/jquery/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}" type="text/javascript"></script>

    @stack('js')

</body>
</html>