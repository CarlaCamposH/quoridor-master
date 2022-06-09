<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GAME</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Edited CSS -->
  <link rel="stylesheet" href="css/game.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="images/q.png" type="image/png"/>
</head>
<body>
  <div class="imageArrow">
    <a href="/"><img src="images/arrow.png" height="50" width="50" alt="arrow.png"/></a>
  </div>
  <div class="container">
    <div class="row justify-content-center no-gutters mb-5 mb-lg-0" style="margin-top: 2rem; text-align: center;">
      <div class="col-lg-5 bg-videoGame titleDiv">
        <div class="divGame">
            <h3 class="divTitles">Download here the game!</h3>
            <a href="#" class="link" >Link to download</a>
        </div>
      </div>
      <div class="col-lg-5">
        <!-- Form Register Card -->
        <div class="card border-0 bg-greenColor" style="margin-top: 2rem;">
          <div class="">
            <h3 class="theOpinion divTitles2">YOUR OPINION</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="game">
              {{csrf_field()}}
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
                <div class="col-md-8 col-sm-2">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- Opinion -->
              <div class="form-group">
                <label for="description" class="col-md-12 textStyle">Your opinion</label>
                <div class="col-md-8">
                  <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                  @error('description')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <!-- Number Stars -->
              <div class="form-group">
                <label for="number_stars" class="col-md-12 textStyle">Number of Stars</label>
                <div class="col-md-8">
                  <select class="form-control" id="number_stars" name="number_stars" required autocomplete="number_stars">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
              <br><br>
              <!-- Join Button -->
              <div class="form-group" style="text-align: center;">
                <div class="col-md-12">
                  <input type="submit" class="btn btn-colorJoin" value="SEND">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer bg-black small text-center text-white-50" style="margin-bottom:1rem;"><div class="container">Gaston&Carla ©</div></footer>
  </body>
  </html>
