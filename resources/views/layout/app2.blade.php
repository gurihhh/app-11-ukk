<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas Dashboard</title
    @include('part.link')
</head>

<body>
    <div id="app">
        @include('layout.sidebar2')
        </div>
        <div id="main">
            @yield('konten2')

<footer>
@include('layout.footer')
</footer>
        </div>
    </div>
    @include('part.script')
</body>

</html>
