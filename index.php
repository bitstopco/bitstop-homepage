<?php 
  require("vendor/autoload.php");
  
  include('lib/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>bitstop</title>
  <link href="css/style.css" rel="stylesheet">

  <link rel="shortcut icon" type="image/png" href="img/favicon.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
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
              <img src="img/logo.png">
            </a>

            <div id="main-nav" class="navbar-collapse">          
              <ul class="social-links">
                <li class="current-value">1 BTC = <?php echo BTCprice('1'); ?></li>
                <a href="#"><li class="fa fa-twitter"></li></a><!-- Twitter Link -->
                <a href="#"><li class="fa fa-facebook"></li></a><!-- Facebook Link -->
                <a href="#"><li class="fa fa-instagram"></li></a><!-- Instagram Link -->
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
          <h2>Fall 2014</h2>
        </div>
      </div>
    </div><!-- /container -->
  </section>

  <!--////////// LATEST TRANSACTION SECTION ////////// -->
  <section id="features">
    <div class="container wow fadeIn animated">
      <h1>Latest Transactions</h1>
      <h2>See transactions happen live as they happen like swoofff  ect ect.</h2>
    </div><!-- /container -->
    
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="panel" style="border-bottom: 0px; border-left: 0px; border-right: 0px;">
            <div class="panel-body transaction-container">
              <table class="table table-striped transactions">
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div><!-- /row -->
    </div><!-- /container -->
  </section>

  <!--////////// WHATS BITCOIN SECTION ////////// -->
  <section id="features" class="what-is-bitcoin">
    <div class="container wow fadeIn animated">
      <h1>Bitcoin is an innovative payment network <br> and a new kind of money.</h1>
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
      <form class="form-inline">
        <input type="email" id="email" name="email" placeholder="Enter your email..." class="input-lg">
        <button type="submit" class="btn btn-primary">Subscribe</button>
      </form>
    </div>

  </section>
  
  <!--////////// FOOTER SECTION ////////// -->
  <footer>
    <p>© Copyright 2014 BITSTOP</p>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/livestamp.min.js"></script>
</body>
</html>