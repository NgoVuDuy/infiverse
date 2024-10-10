<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('images/logo/logo-infiverse.png') }}" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @include('includes.libraries')


    @yield('css')
</head>

<body>


    @yield('content')

    @yield('js')

</body>

</html>