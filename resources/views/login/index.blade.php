<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up | Log In</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style_lg.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">   
  </head>
  <body>
   <div class="form-bg">
      <div class="container">
          <div class="row">
              <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                  <div class="form-container">
                      <div class="left-content">
                          <h3 class="title">Course UNIVERSITAS DARUL ULUM</h3>
                          <h4 class="sub-title">Selamat datang.</h4>
                      </div>
                      <form action="/login" method="post">
                        @csrf
                      <div class="right-content">
                          <h3 class="form-title">Login</h3>
                          <form class="form-horizontal">
                              <div class="form-group">
                              <label>Email</label>
                                  <input type="email" name="email" class="form-control @error('email')is-invalid
                                  @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                  @error('email')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                              </div>
                              <div class="form-group">
                              <label>Password</label>
                                  <input type="password" name="password" id="password" placeholder="password" class="form-control">
                              </div>
                              <button class="btn signin">Login</button>
                              <div class="remember-me">
                                  <input type="checkbox" class="checkbox">
                                  <span class="check-label">Remember Me</span>
                              </div>
                              <a href="" class="forgot">Forgot Password</a>
                          </form>
                          <span class="separator">OR</span>
                          <ul class="social-links">
                              <li><a href=""><i class="fab fa-google"></i> Login with Google</a></li>
                              <li><a href=""><i class="fab fa-facebook-f"></i> Login with Facebook</a></li>
                          </ul>
                          <span class="signup-link">Don't have an account? Sign up <a href="">here</a></span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <script src="style.js"></script>
  </body>
</html>