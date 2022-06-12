<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--mettere il link ad app css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('pageTitle')</title>
</head>
<body>
@include('partials.header')
@include('partials.jumbotron')
    <main>
        @include('partials.main')
    </main>
@include('partials.footertop')
@include('partials.footermid')
@include('partials.footerbot')
</body>
</html>