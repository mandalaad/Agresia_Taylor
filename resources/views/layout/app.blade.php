<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Judul')</title>
    @include('includes.Style')

</head>
<body>
    @include('includes.Navbar')
    @yield('Content')
    @include('includes.Footer')
    @include('includes.Script')

</body>
</html>