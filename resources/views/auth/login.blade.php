<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport", content="width=device-width, initial-scale=1.0">
  <title>Agila - Login</title>

  <link rel="icon" href="{{ asset('img/Symbol.svg') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
    rel="stylesheet"
  />
</head>

  <body class="main-body" style="background-color: white; background-image: none;">
    <div class="container-sign">
        <div class="sign-block-1">
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <a href="{{ route('home') }}" id="logo"><img src="{{ asset('img/Vertical.svg') }}" alt="Agila logo" /></a> 

              <section>
                <div>
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="input @if(session('status')) border-red @endif" value="{{ old('email') }}" />  
                </div>

                <div>
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="input @if(session('status')) border-red @endif" />    
                </div>

                @if (session('status'))
                  <div class="text-alert" style="display: grid; place-items: center;">
                      {{ session('status') }}
                  </div>
                @endif
                
                <div id="forgot-pass">
                  <a href="{{ route('reset') }}">Forgot your password?</a>
                </div>
              </section>

              <section>
                <button type="submit" class="btn btn-form-login">LOG IN</button>
              </section>
            </form>
    
            {{-- <div class="form-divider">
            <div class="form-divider-line"></div>
            <div class="form-divider-text">OR CONNECT WITH</div>
            <div class="form-divider-line"></div>
            </div>
    
            <div class="form-social-btns">
                <button class="btn btn-facebook">
                    <div class="icon icon-facebook"></div>
                    FACEBOOK
                </button>
                <button class="btn btn-google">
                    <div class="icon icon-google"></div>
                    GOOGLE
                </button>
            </div> --}}
        </div>
    
        <div class="sign-block-2">
            <h1>LOG IN</h1>
            <img src="{{ asset('img/undraw_authentication_fsn5.svg') }}" alt="" />
            <p>Welcome back!</p>
        </div>
    </div>
  </body>

</html>