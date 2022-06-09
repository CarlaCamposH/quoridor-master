<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOGIN</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Edited CSS -->
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="images/q.png" type="image/png"/>
</head>
<body>
  <div class="imageArrow">
    <a href="/"><img src="images/arrow.png" height="50" width="50" alt="arrow.png"/></a>
  </div>
  <div class="containerPers">
    <div class="rowInline">
      <div class="margin-topCard">
        <!-- Text Login Card -->
        <div class="card border-0 bg-transparent">
          <div class="card-body">
            <h5 class="card-title titleCard">WANT TO JOIN US?</h5>
            <p class="card-text textCard">You do not have an account and you want to enjoy the advantages that we give? Register by clicking the button below, and come play!</p>
            <br><a href="{{ route('register') }}" class="btn btn-color">JOIN US</a>
          </div>
        </div>
      </div>
      <div class="margin-topCard2">
        <!-- Form Login Card -->
        <div class="card border-0 bg-greenColor">
          <h5 class="titleSignIn">SIGN IN</h5>
          <div class="card-body2">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <!-- Email -->
              <div class="form-group">
                <label for="email" class="col-md-8 textLabelEmail">Email</label><br>
                <div class="col-md-12">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- Password -->
              <div class="form-group">
                <label for="password" class="col-md-8 textLabelPass">Password</label><br>
                <div class="col-md-12">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label styleRememberMe" for="remember">
                      {{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8">
                  <button type="submit" class="btn btn-color2">
                    SIGN IN
                  </button>
                </div>
                <div class="col-md-12">
                  @if (Route::has('password.request'))
                  <a class="btn btn-linkStyle" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                  @endif
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
