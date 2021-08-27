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
       
            <form class="form" id="createAccount" method="POST" action="{{ route('register') }}">
                        @csrf
                <h1 class="form__title">Create Accout</h1>
                <div class="form__message form__message--error"></div>
                    <div class="form__input-group">
                        <input id="name"  placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror form__input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
                    <div class="form__input-group">
                        <input id="email"  placeholder="Email" type="email" class="form__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
          
                <div class="form__input-group">
                    <input id="password"  placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror form__input" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form__input-group">
                    <input onkeyup="check(this)"  placeholder="Confirm password" id="password-confirm" type="password" class="form-control form__input" name="password_confirmation" required autocomplete="new-password">
                        <span style="color: rgb(148, 10, 10);"><error id="arlet"></error></span>
                </div>
                
                <button class="form__button submit" type="submit" >Continue</button>
    
                <p class="form__text">
                    <a class="form__link" href="{{ route('login') }}" id="linkLogin" >Already have an account? Sign in.</a>
                </p>
            </form>
        </div>
    </div>
    <script type="text/javascript">
    var password = document.getElementById("password");
    var flag = 1;
    function check(elem){
        if(elem.value.length > 0) {
            if(elem.value !== password.value) {
            document.getElementById("arlet").innerText = "Password does not match.";
                flag = 0;
            } else {
                
                document.getElementById("arlet").innerText = "";
                flag = 1;
            }
        }  else {
                document.getElementById("arlet").innerText = "Please confirm password";
                flag = 0;
            }
    }
    function validate() {
        if(flag===1) {
            return true;
        } else {
            return false;
        }
    }
    </script>
   
</body>
</html>