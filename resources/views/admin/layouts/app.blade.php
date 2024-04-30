<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'candy-tour') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    @include('admin.ainc.header_link')
    <link rel="stylesheet" href="{{asset('assets/css/toggleswitchery.css')}}">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script> -->
    <script src="{{ asset('assets/js/toggleswitchery.js')}}"></script>
    
</head>
<body class="nav-md">
    <div id="app">
        <main class="py-4">
            @yield('content')
            <!-- footer content -->
            @include('admin.ainc.footer')
            <!-- /footer content -->
        </main>
    </div>
</body>
</html>
