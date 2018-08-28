@extends('layouts._app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bounty OneShare</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_/util.css">
    <link rel="stylesheet" type="text/css" href="../css_/main.css">
<!--===============================================================================================-->
</head>
<body>


    <div class="container-contact100">
    <!-- <div class="container"> -->
<!--         <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
 -->

        <div class="wrap-contact100">
            <div class="alert alert-secondary" style="margin-left: -30px; margin-right: -30px;" role="alert">
                  <h4 class="alert-heading">Bounty campaign!</h4>
                  <hr>
                  <p class="mb-0">The ONE SHARE bounty campaign will distribute 5,000,000 ONE Tokens. Estimated value for each
user is between $ 150 to $ 5000. ICO price: 1 ONE Token = 0.04 USD</br>
The campaign aims for influencers and media attention for our project. To be eligible to
participate, write a positive editorial, news, analysis, recommendation, tweet, post, video, on
social media or cryptocurrencies news channels. All news dissemination platforms can be used.</br>
The distribution of the ONE SHARE Tokens for each participant will depend on some factors that
will be observed: Quantity of visualization, quantity of users interactions, quality of the analysis of
our project, amounts of your followers, quality of the platform used.</p>
                 
            </div>
            <form class="contact100-form validate-form" method="POST" action="{{ route('bounty.register') }}" aria-label="{{ __('Login') }}">
                        @csrf
                @if(session()->has('message-success'))
                    <div class="alert alert-success">
                    {{ session()->get('message-success') }}
                    </div>
                @endif
                @if(session()->has('message-error'))
                    <div class="alert alert-danger">
                    {{ session()->get('message-error') }}
                    </div>
                @endif
<!-- 
                <span class="contact100-form-title">
                    Bounty
                </span> -->
 <!--                  <span class="contact100-form-text">Enter Your Name</span>
              <div class="wrap-input100 validate-input" data-validate="Please enter your name">

                    <input class="input100{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ $fullname ?? old('fullname') }}" type="text" placeholder="Ex: John Wick" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('fullname'))
                        <span class="contact100-form-text alert-danger">{{ $errors->first('fullname') }}</span>
                     @endif
                </div> -->

                <span class="contact100-form-text">Submit the link of your work:</span>
               
                <div class="wrap-input100 validate-input" data-validate="">
                    <input class="form-control input100" name="work_link" value="{{ $work_link ?? old('work_link') }}" type="text" placeholder="Ex: https://twitter.com/OneshareO/status/1032910065068593152" required>
                    @if ($errors->has('work_link'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('work_link') }}</span>
                    @endif
                </div>
                <div class="alert alert-info" role="alert" style="font-size: 16px">
                    <p class="text-primary" style="font-size: 16px; text-align: justify;
    text-justify: inter-word;">You may participate more than once for this campaign:</br>
                    Example:
                    You are a big influence on twitter - one of the favorite platform of crypto investors, and has
                    many followers - each tweet that comments on our project or makes an investment
                    recommendation, can be rewarded separately.
                </div>
<!-- 
                <span class="text-info">
                    <p class="text-info">You may participate more than once for this campaign:</p>

<p class="text-info">Example:</p>
<p class="text-info">You are a big influence on twitter - one of the favorite platform of crypto investors, and has
many followers - each tweet that comments on our project or makes an investment
recommendation, can be rewarded separately.</p></br></span> -->
                
                 <span class="contact100-form-text">Enter Your E-mail</span>
               
                <div class="wrap-input100 validate-input" data-validate="Please enter email: e@a.x">
                    <input class="form-control input100" name="email" value="{{ $email ?? old('email') }}" type="email" placeholder="Ex: john@one-fund.io" required>
                    @if ($errors->has('email'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <span class="contact100-form-text">ETH Address for the Bounty reward</span>
                <span ><i style="color: red">It must be from a private wallet - not from exchange address</i></span>
                <div class="wrap-input100 validate-input" data-validate="ETH Address for the airdrop ">

                    <input class="form-control input100" type="text" name="eth_address" placeholder="Ex: 0x32be343b94f860124dc4fee278fdcbd38c102d88" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('eth_address'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('eth_address') }}</span>
                    @endif
                </div>
                
            <div class="contact100">
                 <span>Any question related to airdrop, reply your thread in One Forum <a href="https://forum.one-fund.io/viewforum.php?f=13" target="_blank">(LINK)</a></span>
            </div>
            </form>

            <!-- <div class="contact100-more">
                 <span class="contact100-more-highlight">one-fund.io</span>
            </div> -->
        </div>
    </div>



    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script href="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/bootstrap/js/popper.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/daterangepicker/moment.min.js"></script>
    <script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script href="../js_/map-custom.js"></script>
<!--===============================================================================================-->
    <script href="../js_/main.js"></script>

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
@endsection