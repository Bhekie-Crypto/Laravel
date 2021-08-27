<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup Form</title>
    <link href="{{ asset('/css/main.css')}}" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <div class="user__login-and-out">
            <form class="form" id="login" method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="form__title">Login</h1>
                    <div class="form__message form__message--error"></div>
                        <div class="form__input-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form__input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form__input" placeholder="User email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form__input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form__input" name="password" required autocomplete="current-password">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button class="form__button" type="submit" id="submit">Continue</button>
                        <p class="form__text">
                            <a href="{{ route('password.request') }}" class="form__link">Forgot your password?</a>
                    </p>

                   
                    <p class="form__text">
                        <a class="form__link" href="{{ route('register') }}" id="linkCreateAccount" >Don't have an account? Create accout.</a>
                    </p>
            </form>
        </div>
    </div>
</body>
</html>