<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php get('title'); ?></title>
  <link href="<?php get('url'); ?>/assets/css/style.css" rel="stylesheet">

  <meta property="og:title" content="<?php get('title'); ?>"/>
  <meta property="og:url" content="<?php get('url'); ?>"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="Bitcoin Services Coming To South Florida" />
  <meta property="og:image" content="<?php get('url'); ?>/assets/img/favicon.png" />

  <link rel="shortcut icon" type="image/png" href="<?php get('url'); ?>/assets/img/favicon.png">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://insight.bitpay.com/socket.io/socket.io.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php get('url'); ?>/assets/js/bootstrap.js"></script>
  <script src="<?php get('url'); ?>/assets/js/wow.min.js"></script>
  <script src="<?php get('url'); ?>/assets/js/nivo-lightbox.min.js"></script>
  <script src="<?php get('url'); ?>/assets/js/main.js"></script>
  <script src="<?php get('url'); ?>/assets/js/moment.js"></script>
  <script src="<?php get('url'); ?>/assets/js/livestamp.min.js"></script>
  <script src="<?php get('url'); ?>/assets/js/jquery.number.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39352206-11', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>

  <div class="doc-loader"></div>

  <!--/////////// HEADER SECTION //////////-->
  <section id="intro">
    <header>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="container">

            <a class="navbar-brand" href="index.php">
              <img src="<?php get('url'); ?>/assets/img/logo.png">
            </a>

            <div id="main-nav" class="navbar-collapse">
              <ul class="social-links">
                <li class="current-value">1 BTC = <span><?php BTCprice('1'); ?></span></li>
                <a href="https://twitter.com/bitstopofficial" target="_blank"><li class="fa fa-twitter"></li></a><!-- Twitter Link -->
                <a href="https://www.facebook.com/Bitstopofficial" target="_blank"><li class="fa fa-facebook"></li></a><!-- Facebook Link -->
                <a href="https://tagboard.com/bitstopofficial" target="_blank"><li class="fa fa-instagram"></li></a><!-- Instagram Link -->
              </ul>
            </div><!-- /navbar-collapse -->
          </div><!-- /container -->
        </div>
      </nav>
    </header>

    <div class="container">
      <div class="intro-well wow animated bounceIn">
        <div class="col-md-12">
          <h1>Bitcoin Services Coming To South Florida</h1>
        </div>
      </div>
    </div><!-- /container -->
  </section>

  <!--////////// LATEST TRANSACTION SECTION ////////// -->
  <section id="features">
    <div class="container wow fadeIn animated">
      <h1>Bitcoin is a peer to peer decentralized money transfer network. <br> It's fast, secure, and accessible to everyone.</h1>
      <h2>
        Transactions are happening every second all around the World.
        <br>
        Watch them happen live
      </h2>
    </div><!-- /container -->

    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="panel" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
            <div class="panel-body transaction-container">
              <table class="table table-striped transactions">
                <thead>
                <tr>
                   <th style="padding-left: 18px; width: 50%;">Transaction</th>
                   <th style="padding-left: 18px; width: 20%;">Time</th>
                   <th style="padding-left: 18px; width: 30%;">Amount</th>
                </tr>
               </thead>
               <tbody>

                </tbody>
              </table>
            </div>
          </div>

        </div>

        <div class="col-sm-12" style="margin-top: 34px;">
          <h2>
          	Bitcoin can seem a bit complex, but with a little education and some guidance <br> you too can benefit from this amazing new technology.
          </h2>
        </div>
      </div><!-- /row -->
    </div><!-- /container -->
  </section>

  <!--////////// WHATS BITCOIN SECTION ////////// -->
  <section id="features" class="what-is-bitcoin" style="padding-top: 0px; margin: -9px 0px 16px 0px;">
    <div class="container wow fadeIn animated">
      <h1 style="font-size: 39px;">BitStop is here to help make it simple.</h1>
    </div><!-- /container -->
    <div class="container">
      <div class="row">
        <div class="what-is-it">
          <iframe width="560" height="315" src="//www.youtube.com/embed/Gc2en3nHxA4?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div><!-- /row -->
    </div><!-- /container -->
  </section>

  <!--////////// NEWSLETTER SECTION ////////// -->
  <section id="newsletter">
    <div class="container wow animated fadeInDown">
      <h3>Sign up today to be notified when we launch!</h3>
      <h4 class="return-message" style="display: none;">It worked!</h4>
      <h4 class="return-message-error" style="display: none;">It seems like theres a problem, try again.</h4>
      <form class="form-inline newsletter-field">
        <input type="email" id="email" name="email" placeholder="Enter your email..." class="input-lg">
        <button type="submit" class="btn btn-primary">Subscribe</button>

        <p style="color: #ffffff; margin-top: 4px;">*We will never share, rent, or sell your email address to anyone, ever.</p>
      </form>
    </div>
  </section>

  <!--////////// FOOTER SECTION ////////// -->
  <footer>

    <ul class="social center-block" style="float:none;">
      <li>
        <a href="https://www.facebook.com/Bitstopofficial" target="_blank">
          <i class="fa fa-facebook"></i>
        </a>
      </li>
      <li style="margin: 0px 130px;">
        <a href="https://twitter.com/bitstopofficial" target="_blank">
          <i class="fa fa-twitter"></i>
        </a>
      </li>
      <li>
        <a href="https://tagboard.com/bitstopofficial" target="_blank">
          <i class="fa fa-instagram"></i>
        </a>
      </li>
    </ul>

    <p>© Copyright 2014 <?php get('title'); ?>&#0153;</p>
  </footer>

</body>
</html>
