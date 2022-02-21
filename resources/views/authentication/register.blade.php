<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="{{ route('auth.register.store') }}" method="post">
                        @csrf()
                        <input class="form-control" type="text" name="username" placeholder="Username">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                        <button type="submit" class="btn btn-success white-text">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
