<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include ('templateendgame.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include ('templateendgame.navbar')
    @yield('content')
    @include('templateendgame.footer')
</body>
</html>