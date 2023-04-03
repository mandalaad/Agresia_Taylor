<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Judul')</title>
    @include('includes.admin.adminstyle')
    @yield('Style')

</head>
<body class="bg-gradient-primary">
    @yield('Content2')
    @include('includes.admin.adminscript')
</body>
</html>
