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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <h1 class="form__title">User Resset Password</h1>
                <div class="card-body">
                    <form method="POST" id="createAccount" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row form__input-group">
                           
                            <div class="col-md-6">
                                <input id="email" type="email" class="form__input form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row form__input-group">
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="form__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row form__input-group">
                           
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form__input form-control" name="password_confirmation" required autocomplete="new-password">
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

