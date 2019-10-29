<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'My Site')</title>
</head>

<body>
    @yield('content')
    <ul>
        <li><a href="/welcome">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>

</body>
</html>