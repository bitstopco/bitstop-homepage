<?php
  require 'vendor/autoload.php';

  Dotenv::load(__DIR__); # Load env variables

  $app = new \Slim\Slim(array(
    'debug' => true
  ));

  $app->setName('bitstop');

  //Routes
  $app->get('/', 'home');

  # lets go
  $app->run();

  
  function home() {
    include('lib/functions.php');

    echo "You shall not pass";

    echo $config['url'];
  }

?>