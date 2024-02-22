<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset("frontend/login/css/util.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("frontend/login/css/main.css") }}" />
    <!--===============================================================================================-->
    <link
      href="css/font-awesome/css/all.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="limiter">
      <div
        class="container-login100"
        style="background-image: url('{{ asset("frontend/login") }}/images/image-18.jpg')"
      >
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="login100-form-title p-b-49"> Login </span>
            <div class="wrap-input100">
              <input
                class="input100 @error('email') is-invalid @enderror"
                type="email"
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                placeholder="Email:"
              />
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="wrap-input100 m-t-5">
              <input
                class="input100  @error('password') is-invalid @enderror"
                type="password"
                name="password" required autocomplete="current-password"
                placeholder="Password:"
              />
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror

            </div>
            <div class="text-right p-t-8 p-b-31">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                 @endif
            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button type="submit" class="login100-form-btn">Login</button>
              </div>
            </div>
            <div class="flex-col-c p-t-30">
              <span class="txt1 p-b-17">Don't you have an account?</span>
              <a href="{{ route('register') }}" class="txt2 login100-form-anchor"> Sign Up Now! </a>
            </div>
            <div>
              <span>Find us on</span>
            </div>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-blogger"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-instagram"></i>
            <a href="" class="login100-form-anchor" style="margin-left: 140px"
              >www.uiuboighor.com</a
            >
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
