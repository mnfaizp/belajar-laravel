<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div  class="bg-image min-vh-100 d-flex flex-row align-items-center ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="col-sm-12">
                    @if(session()->get('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                </div>
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-medium-emphasis">Sign In to your account</p>
                            <form method="POST" action="{{ route('auth.login') }}">
                                @csrf()
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <i class="icon cil-user"></i></span>
                                    <input id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="email">
                                    @error('username')
                                    <span class="invalid-tooltip" role="alertdialog">coba</span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <i class="icon cil-lock-locked"></i></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="card col-md-5 text-white bg-primary py-5">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <a href="{{ route('auth.register.show') }}" class="btn btn-lg btn-outline-light mt-5" type="button">Register Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
