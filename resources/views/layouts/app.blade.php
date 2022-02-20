<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style')
</head>
<body>
    @include('layouts.sidebar')

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <div class="body mt-2">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/app.js') }}" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>
