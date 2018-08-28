@extends('layouts._app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AirDrop OneShare</title>
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
                  <h4 class="alert-heading">Airdrop Campaign!</h4>
                  <hr>
                  <p class="mb-0">One Share will conduct an airdrop campaign with the intention of spreading awareness of our
project. Attract a large number of users to project and get a live audience to our social
networks. Participants, in turn, get rewards for social activity and attracting new partners.</br>
ONE SHARE is airdropping 10.000.000 ONE Tokens. Estimated value for each user is ~$25. ICO
price: 1 ONE Token = 0.04 USD.</br>
Just follow the simple steps below to be able to earn up to $25 in One Share token. Remember,
even with a few tokens, you are already a partner of our decentralized enterprise project, and can
help us make this a great project, including taking part in strategic polls and getting a share of the
profits, read our White Paper to know how can you profit with our decentralized project..</p>
                 
            </div>
            <form class="contact100-form validate-form" method="POST" action="{{ route('airdrop.register') }}" aria-label="{{ __('Login') }}">
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
                    Airdrops
                </span> -->
 <!--                  <span class="contact100-form-text">Enter Your Name</span>
              <div class="wrap-input100 validate-input" data-validate="Please enter your name">

                    <input class="input100{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ $fullname ?? old('fullname') }}" type="text" placeholder="Ex: John Wick" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('fullname'))
                        <span class="contact100-form-text alert-danger">{{ $errors->first('fullname') }}</span>
                     @endif
                </div> -->

                <span class="contact100-form-text">Enter Your E-mail</span>
               
                <div class="wrap-input100 validate-input" data-validate="Please enter email: e@a.x">
                    <input class="form-control input100" name="email" value="{{ $email ?? old('email') }}" type="email" placeholder="Ex: john@one-fund.io" required>
                    @if ($errors->has('email'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <span class="contact100-form-text">Follow us on Twitter <a href="https://twitter.com/OneshareO" target="_blank">(LINK)</a> + Retweet any of our tweets.</span><span class="contact100-form-text">
            Provide your Twitter username</span>
                <div class="wrap-input100 validate-input" data-validate="@one-fund">

                    <input class="form-control input100" type="text" name="twitter_profile" placeholder="Ex: @one-fund">
                    <span class="focus-input100"></span>
                    @if ($errors->has('twitter_profile'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('twitter_profile') }}</span>
                    @endif
                </div>

                <span class="contact100-form-text">Join ONE SHARE Telegram chat <a href="https://t.me/joinchat/FAwWX0ZEfxqvrhAtMpJmLw"> (LINK) </a></span>
                 <span class="contact100-form-text">Provide your username</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter your username Telegram">

                    <input class="form-control input100" type="text" name="telegram_profile" placeholder="Ex: @yourprofile">
                    <span class="focus-input100"></span>
                    @if ($errors->has('telegram_profile'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('telegram_profile') }}</span>
                    @endif
                </div>
                <span class="contact100-form-text">Subscribe to ONE SHARE Reddit <a href="https://www.reddit.com/user/one_share"> (LINK)</a> + Upvote one post</span>
                 <span class="contact100-form-text">Provide your Reddit profile URL</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter your Reddit profile URL">

                    <input class="form-control input100" type="text" name="reddit_profile" placeholder="Ex: https://www.reddit.com/user/username">
                    <span class="focus-input100"></span>
                    @if ($errors->has('reddit_profile'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('reddit_profile') }}</span>
                    @endif
                </div>
                 <span class="contact100-form-text">Follow ONE SHARE on Medium.<a href="https://medium.com/@oneshareofficial"> (LINK)</a> </span>                    
                 <span class="contact100-form-text">Provide your Medium profile</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter you Medium profile">

                    <input class="form-control input100" type="text" name="medium_profile" placeholder="Ex: @oneshareofficial">
                    <span class="focus-input100"></span>
                     @if ($errors->has('medium_profile'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('medium_profile') }}</span>
                    @endif
                </div>
                <span class="contact100-form-text">Coment the ONE SHARE Bitcointalk thread <a href="https://bitcointalk.org/index.php?action=profile;u=2340013;sa=summary"> (LINK) </a></span>
                <span class="contact100-form-text">Provide your Bitcointalk username</span>
                <div class="wrap-input100 validate-input" data-validate="Please enter your Bitcointalk">

                    <input class="form-control input100" type="text" name="bitcointalk_profile" placeholder="Ex: oneshareofficial">
                    <span class="focus-input100"></span>
                   @if ($errors->has('bitcointalk_profile'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('bitcointalk_profile') }}</span>
                    @endif
                </div>
                <span class="contact100-form-text">ETH Address for the airdrop</span>
                <span ><i style="color: red">It must be from a private wallet - not from exchange address</i></span>
                <div class="wrap-input100 validate-input" data-validate="ETH Address for the airdrop ">

                    <input class="form-control input100" type="text" name="eth_address" placeholder="Ex: 0x32be343b94f860124dc4fee278fdcbd38c102d88" required>
                    <span class="focus-input100"></span>
                    @if ($errors->has('eth_address'))
                            <span class="contact100-form-text alert-danger">{{ $errors->first('eth_address') }}</span>
                    @endif
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                       Submit
                    </button>
                </div>
            </form>

            <div class="contact100">
                 <span>Any question related to airdrop, reply your thread in One Forum <a href="https://forum.one-fund.io/viewforum.php?f=13" target="_blank">(LINK)</a></span>
            </div>
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