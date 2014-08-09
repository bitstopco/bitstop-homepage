<?php

	$config = array(
		'title' => 'Bitstop',
		'url' => 'http://198.199.109.22' 
	);

	function BTCprice($amount)
	{
		$request = "https://coinbase.com/api/v1/prices/buy?qty=".$amount;
		$response = file_get_contents($request);
		$results = json_decode($response, TRUE);

		$price = "$".$results['subtotal']['amount'];

		return $price;
	}

?>