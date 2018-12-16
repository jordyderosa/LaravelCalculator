<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
