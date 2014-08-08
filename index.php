<?php 
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
            <div class="panel-body">
              <table class="table table-striped transactions">
                <tbody><tr><td class="t-hash"><a href="https://blockchain.info/tx/2b69ee55eb4ddd7a457b2a10f069715c46af3887d7a4c0d2888f9082d3e8d395" target="_blank">2b69ee55eb4ddd7a457b2a10f069715c46af3887d7a4c0d2888f9082d3e8d395</a></td><td class="t-time"><span data-livestamp="1407537232"></span></td><td class="t-amount"><span class="label label-success">2348168 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/c173da9d25e46558f4c3fce8c78e7ce54b18858b3eca665f1c0de97bf01a14da" target="_blank">c173da9d25e46558f4c3fce8c78e7ce54b18858b3eca665f1c0de97bf01a14da</a></td><td class="t-time"><span data-livestamp="1407537227"></span></td><td class="t-amount"><span class="label label-success">19990000 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/21535678727e6b2e76bfb04cb9a0418140a0e2ac5a95ac63763f99ca842c05c2" target="_blank">21535678727e6b2e76bfb04cb9a0418140a0e2ac5a95ac63763f99ca842c05c2</a></td><td class="t-time"><span data-livestamp="1407537226"></span></td><td class="t-amount"><span class="label label-success">180000 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/c9a60adbb5507822a909bf484ba23ab39fa4cd7503f2a5735ba120550cd37998" target="_blank">c9a60adbb5507822a909bf484ba23ab39fa4cd7503f2a5735ba120550cd37998</a></td><td class="t-time"><span data-livestamp="1407537225"></span></td><td class="t-amount"><span class="label label-success">49834960 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/da608a9e75ba98eb0e9faab1fc72ac4bb8cf1bcb570381983fe2515acd5c7b93" target="_blank">da608a9e75ba98eb0e9faab1fc72ac4bb8cf1bcb570381983fe2515acd5c7b93</a></td><td class="t-time"><span data-livestamp="1407537223"></span></td><td class="t-amount"><span class="label label-success">2819024 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/48453f7bde50aa1b97180f32680e26c1a03293de038a3011ed2c17cc1fd536c4" target="_blank">48453f7bde50aa1b97180f32680e26c1a03293de038a3011ed2c17cc1fd536c4</a></td><td class="t-time"><span data-livestamp="1407537218"></span></td><td class="t-amount"><span class="label label-success">14990000 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/be62016e50f6a2d4a1005dc3a39925bcf9a4919c22a4152967cc8626e62298c3" target="_blank">be62016e50f6a2d4a1005dc3a39925bcf9a4919c22a4152967cc8626e62298c3</a></td><td class="t-time"><span data-livestamp="1407537217"></span></td><td class="t-amount"><span class="label label-success">34116101 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/2634c0fab99d94c85da1bbe2e874e3b0dcbb0cffcfdae1be0935e05a537fb319" target="_blank">2634c0fab99d94c85da1bbe2e874e3b0dcbb0cffcfdae1be0935e05a537fb319</a></td><td class="t-time"><span data-livestamp="1407537216"></span></td><td class="t-amount"><span class="label label-success">9070876 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/2b23f51260e01803bb34317b7056c7f6e6bda1a54e89ba62d295434d2d3ed426" target="_blank">2b23f51260e01803bb34317b7056c7f6e6bda1a54e89ba62d295434d2d3ed426</a></td><td class="t-time"><span data-livestamp="1407537215"></span></td><td class="t-amount"><span class="label label-success">299447618 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/0dfd682b7d0b030ef46ea9b54fb74b174c067568b70f957f8a11618eab613f5d" target="_blank">0dfd682b7d0b030ef46ea9b54fb74b174c067568b70f957f8a11618eab613f5d</a></td><td class="t-time"><span data-livestamp="1407537214"></span></td><td class="t-amount"><span class="label label-success">5990609 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/9749c693b2496a8d8cea7e50bb6a88d5357acd7e04a4c19b9f7dee3fc27a6f1f" target="_blank">9749c693b2496a8d8cea7e50bb6a88d5357acd7e04a4c19b9f7dee3fc27a6f1f</a></td><td class="t-time"><span data-livestamp="1407537213"></span></td><td class="t-amount"><span class="label label-success">2836400 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/9a02bde344633422da2c27856e4f3687faedd6c528ac97ea6e76a989fa99f60f" target="_blank">9a02bde344633422da2c27856e4f3687faedd6c528ac97ea6e76a989fa99f60f</a></td><td class="t-time"><span data-livestamp="1407537210"></span></td><td class="t-amount"><span class="label label-success">15097232 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/30725b1c6b1294e51b0d1fd380df0c00ac37cdbfa356327b22167c27d464ab5c" target="_blank">30725b1c6b1294e51b0d1fd380df0c00ac37cdbfa356327b22167c27d464ab5c</a></td><td class="t-time"><span data-livestamp="1407537209"></span></td><td class="t-amount"><span class="label label-success">10155117 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/674168c98eaf7b0fa0c7c29a951404e5cc12ee86fd0b51cca4d7686cb59b7b15" target="_blank">674168c98eaf7b0fa0c7c29a951404e5cc12ee86fd0b51cca4d7686cb59b7b15</a></td><td class="t-time"><span data-livestamp="1407537206"></span></td><td class="t-amount"><span class="label label-success">6473893 BTC</span></td></tr><tr><td class="t-hash"><a href="https://blockchain.info/tx/7a11eb0c5c4a991233527da77030664e5bbf92a843fcb236bad0e129dc2040bd" target="_blank">7a11eb0c5c4a991233527da77030664e5bbf92a843fcb236bad0e129dc2040bd</a></td><td class="t-time"><span data-livestamp="1407537206"></span></td><td class="t-amount"><span class="label label-success">800000 BTC</span></td></tr>
                  
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
</body>
</html>