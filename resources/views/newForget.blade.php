
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup Form</title>
    <link href="{{ asset('/css/main.css')}}" rel="stylesheet">
    <!-- <script src="{{ asset('/js/login.js')}}"></script> -->
</head>
<body>
    <div class="container">
        <div class="user__login-and-out">
        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <h1 class="form__title">User Resset Password</h1>
                    <form method="POST" id="createAccount" action="{{ route('password.email') }}">
                        @csrf
                        
                      
                        <div class="form__input-group">
                            <div class="col-md-6">
                                <input id="email" placeholder="E-Mail Address" type="email" class="form-control @error('email') is-invalid @enderror form__input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <button class="form__button submit" type="submit" >Send Password Reset Link</button>
                         
                                <p class="form__text">
                    <a class="form__link" href="{{ route('login') }}" id="linkLogin" >Go to Sign in.</a>
                </p>

                                <p class="form__text">
                        <a class="form__link" href="{{ route('register') }}" id="linkCreateAccount" >Don't have an account? Create accout.</a>
                    </p>

                   

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

