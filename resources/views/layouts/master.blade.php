<!doctype html>
<html lang="en">
<head>
    <title>Agrinia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

@include('partials.styles')
</head>
<body>
@include('partials.header')

@yield('content')

@include('partials.footer')

@include('partials.scripts')
</body>
</html>