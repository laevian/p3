<!doctype html>
<html>
<head>
    <title>Developer&#8217;s Best Friend</title>

    <meta charset='utf-8'>
    <link href="/css/styles.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
      @yield('header')
    </header>

    <section class="container">
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        <a href="/">Home</a>  |  <a href="/lorem">Lorem Generator</a>  | <a href="/usergen">User Generator</a><br>
        &copy; {{ date('Y') }} Leslie Pocklington. Background image taken from <a href="http://subtlepatterns.com">Subtle Patterns.</a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
