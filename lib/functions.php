<?php

	function get($get)
	{
		switch ($get) {
    	case "title":
        $value = $_ENV['SITE_TITLE'];
        break;
    	case "url":
        $value = $_ENV['SITE_URL'];
        break;
    	case "cake":
        $value = "is a lie";
        break;
		}

		echo $value;
	}

	function BTCprice($amount)
	{
		$request = "https://coinbase.com/api/v1/prices/buy?qty=".$amount;
		$response = file_get_contents($request);
		$results = json_decode($response, TRUE);

		$price = "$".$results['subtotal']['amount'];

		echo $price;
	}

?>