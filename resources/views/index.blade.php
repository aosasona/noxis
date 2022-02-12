<!DOCTYPE html>
<html>
<head>
  <title>RanCh - Quick, Easy & Anonymous Conversations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="RanCh is a quick, easy and anonymous message service for your professional & personal usage. Follow us @RanCh_Web"/>
  <meta name="keywords" content="RanCh, ran-ch, anonymous, ranch web, ranch twitter, ranch group, message, messaging, quick registration, chat, ranch chat, link chat, anon, quick convo, quick messaging, influencer medium, easy chat"/>

    <!-- Facebook Metadata -->
     <meta property="og:type" content="website">
     <meta property="og:url" content="https://ran-ch.com/">
     <meta property="og:title" content="Ranch - Quick, Easy & Anonymous Conversations">
     <meta property="og:description" content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage. Follow us @RanCh_Web">
     <meta property="og:image" content="/img/favicon.jpeg">

     <!-- Twitter Metadata -->
     <meta property="twitter:card" content="summary_large_image">
     <meta property="twitter:url" content="https://ran-ch.com/">
     <meta property="twitter:title" content="Ranch - Quick, Easy & Anonymous Conversations">
     <meta property="twitter:description" content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage. Follow us @RanCh_Web">
     <meta property="twitter:image" content="/img/favicon.jpeg">

     <!--General Metadata-->
     <meta property="og:site_name" content="RanCh">
     <meta property="og:site" content="https://ran-ch.com">
     <meta property="og:title" content="RanCh - Quick, Easy & Anonymous Conversations">
     <meta property="og:description" content="RanCh is a quick, easy and anonymous messaging service for your professional & personal usage. Follow us @RanCh_Web">
     <meta property="og:image" content="/img/favicon.jpeg">
     <meta property="og:url" content="https://ran-ch.com">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-dark ranch-dark-body">

<!--Navigation bar-->
<nav class="navbar sticky-top navbar-light bg-light py-1 px-3" style="font-size: 87%;">
  <div class="nav-brand text-secondary"><img src="/img/ranch.png" style="max-width:35px;" class="d-inline-block align-middle"/><span class="fw-bold h5 align-middle">anCh</span></div>

<div class="d-flex flexbox-column align-items-center">
  <a href="/index.php" class="nav-item nav-link active flexbox-row fw-bold">Home</a>
  <a href="/account" class="nav-item nav-link flexbox-row"><img src="/img/account.png" style="max-width:30px;" class="d-inline-block align-middle p-0 nav-but"/></a>
  <a href="https://twitter.com/RanCh_Web" class="nav-item nav-link flexbox-row"><img src="/img/twitter.png" style="max-width:30px;" class="d-inline-block align-middle p-0 nav-but"/></a>
</div>
</nav>



<div id="intro" class="container relative mt-5 user-select-none" style="height:90vh;">

  <!--Splash Screen-->
      <div id="splash">
          <div class="position-absolute top-50 start-50 translate-middle" id="homeimg">
            <img src="{{ asset('img/ranch.png') }}" class="logo-img" alt="Logo"/>
          </div>

          <button onclick="getstarted()" id="getstarted" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x mb-2">Get Started &#129299;</button>
      </div>

  <!--Welcome Screen-->
    <div class="hometext col position-absolute top-50 start-50 translate-middle" id="hometext">
      <h1 class="display-1 fw-bolder">Hello.</h1>
      <h2 class="display-5 fw-lighter">Welcome to <b class="text-primary">RanCh</b></h2>
    </br>
    <button onclick="next()" id="next" class="btn btn-outline-secondary mb-5">What's this? &#129300;</button>
    </div>




<!--About RanCh-->
<div class="about position-absolute fw-lighter" id="about" style="top:20%; left:14%; right:14%; font-size: 84%">
  <h1 class="display-5 fw-lighter">What is <b class="fw-bolder text-primary">RanCh</b>?</h1>
<p class="text-secondary"><b class="text-primary fw-bolder">RanCh</b> is a web service aimed at giving you a platform to communicate quickly, easily & anonymously with whomever you want to chat with –
  without the distractions of usernames, number exchanging and typing on your mobile phone. We don't have the standard registration process users usually go through,
  we don’t serve ads either, we serve you 😎</br>
<small class="text-danger"><B>[IMPORTANT]</B> Group chat functionality will be added in V2!</small>
</p></br>

  <h1 class="display-5 mt-4 fw-lighter">Who is <b class="fw-bolder text-primary">RanCh</b> for?</h1>
  <p class="text-secondary"><span class="text-primary">RanCh</span> can be used for both <u>professional</u> and <u>personal</u> use. RanCh can be used to communicate with strangers without revealing
   any details at all. For example, a YouTuber who wants to interact with a couple of his followers/subscribers who might not necessarily all use Twitter could
  leave a RanCh link in the description where they could do that with <b class="text-primary bolder">NO</b> sign up required!</p></br>

  <h1 class="display-5 mt-4 fw-lighter">Getting Started With <b class="fw-bolder text-primary">RanCh</b></h1>
  <ul class="mt-2 text-primary">
    <li><span class="text-secondary">Proceed to the sign-up page using the button below or in the navigation bar.</span></li>
    <li><span class="text-secondary">Enter a valid e-mail and a backup e-mail address on the sign-up page.</span></li>
    <li><span class="text-secondary">You will be sent an OTP for login authentication every-time, we do <b class="text-danger">NOT</b> use fixed passwords for security
    reasons.</span></li>
    <li><span class="text-secondary">Login data is only saved locally on your device for 7 days, after which you'll need to sign in again.</span></li>
    <li><span class="text-secondary">Conversations are also <b class="text-danger">automatically</b> deleted after 7 days. Your RanCh link will be available on your dashboard immediately after signing up,
      guests do not need to sign up to chat with you.</span></li>
  </ol>

  <a href="/account/" class="btn btn-outline-primary mb-3 mt-4">Sign Me Up! &#128524;</a>

<?php include $_SERVER["DOCUMENT_ROOT"]."/php-inc/footer.php"; ?>
</div>

</div>

<!--JavaScript Files-->

<script src="/assets/js/home.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.bundle.js" type="text/javascript"></script>

</body>

</html>
