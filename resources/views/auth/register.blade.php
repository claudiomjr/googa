@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V9</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css_/util.css">
    <link rel="stylesheet" type="text/css" href="css_/main.css">
<!--===============================================================================================-->
</head>
<body>


    <div class="container-contact100">
    <!-- <div class="container"> -->
<!--         <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
 -->
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Airdrop
                </span>
                <span class="contact100-form-text">Enter Your Name</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter your name">

                    <input class="input100" type="text" name="fullname" placeholder="Ex: John Wick" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('fullname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fullname') }}</strong>
                        </span>
                    @endif
                </div>

                <span class="contact100-form-text">Enter Your E-mail</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter email: e@a.x">

                    <input class="input100" type="text" name="email" placeholder="Ex: john@one-fund.io" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <span class="contact100-form-text">Follow ONE SHARE Twitter + Retweet this tweet</span><span class="contact100-form-text">
            Provide your twitter profile</span>
                <div class="wrap-input100 validate-input" data-validate="@one-fund">

                    <input class="input100" type="text" name="twitter_profile" placeholder="Ex: @one-fund" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('twitter_profile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('twitter_profile') }}</strong>
                        </span>
                    @endif
                </div>

                <span class="contact100-form-text">Join ONE SHARE Telegram chat (link)</span>
                 <span class="contact100-form-text">Provide your username</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter your username Telegram">

                    <input class="input100" type="text" name="telegram_profile" placeholder="Ex: one-fund" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('telegram_profile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('telegram_profile') }}</strong>
                        </span>
                    @endif
                </div>
                <span class="contact100-form-text">Subscribe to ONE SHARE Reddit (link) + Upvote one post</span>
                 <span class="contact100-form-text">Provide your Reddit profile URL</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter your Reddit profile URL">

                    <input class="input100" type="text" name="reddit_profile" placeholder="Ex: https://www.reddit.com/r/One-Fund/" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('reddit_profile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('reddit_profile') }}</strong>
                        </span>
                    @endif
                </div>
                 <span class="contact100-form-text">Follow ONE SHARE Medium.(link)</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter you Medium profile">

                    <input class="input100" type="text" name="medium-profile" placeholder="Ex: @oneshareofficial" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('medium-profile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('medium-profile') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Send Email
                    </button>
                </div>
            </form>

            <!-- <div class="contact100-more">
                 <span class="contact100-more-highlight">one-fund.io</span>
            </div> -->
        </div>
    </div>



    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="js_/map-custom.js"></script>
<!--===============================================================================================-->
    <script src="js_/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
