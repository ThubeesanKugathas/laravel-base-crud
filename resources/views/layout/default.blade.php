<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>COMICS | @yield('pageTitle')</title>
</head>
<body>
    @include('partials.miniheader')    
    @include('partials.navbar')

    <div class="ms_jumbotron"></div>


    @yield('mainContent')

    @include('partials.footerBox1')
    @include('partials.footerBox2')
</body>
</html>