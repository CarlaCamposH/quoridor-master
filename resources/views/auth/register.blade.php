<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REGISTER</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Edited CSS -->
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="images/q.png" type="image/png"/>
</head>
<body>
  <div class="imageArrow">
    <a href="/"><img src="images/arrow.png" height="50" width="50" alt="arrow.png"/></a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 margin-topCard">
        <!-- Text Register Card -->
        <div class="card border-0 bg-transparent">
          <div class="card-body">
            <h5 class="card-text titleCard">JOIN TO THE BEST COMMUNITY OF GAMERS</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 margin-topCard2">
        <!-- Form Register Card -->
        <div class="card border-0 bg-greenColor">
          <h2 class="divRegisterTitle">REGISTER</h2><br><br>
          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <!-- Name -->
              <div class="form-group">
                <label for="name" class="col-md-12 textStyle">{{ __('Name') }}</label>
                <div class="col-md-8">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- Email -->
              <div class="form-group">
                <label for="email" class="col-md-12 textStyle">{{ __('E-Mail') }}</label>
                <div class="col-md-8">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- Nickname -->
              <div class="form-group">
                <label for="name" class="col-md-12 textStyle">Nickname</label>
                <div class="col-md-8">
                  <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>
                  @error('nickname')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- Password -->
              <div class="form-group">
                <label for="password" class="col-md-12 textStyle">{{ __('Password') }}</label>
                <div class="col-md-8">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- Confirm Password -->
              <div class="form-group">
                <label for="password-confirm" class="col-md-12 textStyle">{{ __('Confirm Password') }}</label>
                <div class="col-md-8">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>
              <!-- Birthdate -->
              <div class="form-group">
                <label for="password" class="col-md-12 textStyle">{{ __('Birthdate') }}</label>
                <div class="col-md-8">
                  <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" required autocomplete="birthdate" autofocus>
                  @error('birthdate')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- Country -->
              <div class="form-group">
                <label for="password" class="col-md-12 textStyle">{{ __('Country') }}</label>
                <div class="col-md-8">
                  <select class="form-control" id="country_id" name="country_id" required autocomplete="country_id">
                    <option value="1">Inglaterra</option>
                    <option value="2">Espanya</option>
                    <option value="3">Argentina</option>
                    <option value="4">Francia</option>
                    <option value="5">Colombia</option>
                  </select>
                </div>
              </div>
              <!-- Accept Terms -->
              <div class="form-group">
                <div class="col-md-8">
                  <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                  <label for="reg_agree" class="textStyle">I accept <a href="#">terms</a> of use</label>
                </div>
              </div>
              <br><br>
              <!-- Join Button -->
              <div class="form-group" style="text-align: center;">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-colorJoin">JOIN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
