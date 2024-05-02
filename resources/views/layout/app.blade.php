<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @include('inc.headerlink')
    
</head>
<body>
    <div class="">
        @include('inc.header')
    </div>
    <div class="">
        @yield('content')
        @include('inc.footer')
    </div>
</body>
</html>