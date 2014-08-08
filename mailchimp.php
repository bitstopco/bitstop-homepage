<?php
	require("vendor/autoload.php");

	$MailChimp = new \Drewm\MailChimp('e85ef6df956d5ab02ef9ed12cf18aa93-us8');

	$result = $MailChimp->call('lists/subscribe', array(
                'id'                => '16f7bb4e76',
                'email'             => array('email'=>$_GET['email']),
                'merge_vars'        => array('FNAME'=>'', 'LNAME'=>''),
                'double_optin'      => false,
                'update_existing'   => true,
                'replace_interests' => false,
                'send_welcome'      => false,
            ));

	if( $result === false ) {
	  
	  $respond['status'] = array(
	   	'respond' => 500,
	   	'name' => 'error',
	   	'error' => 'I cant even' 
	  );

	  echo json_encode($respond);

	} else if( isset($result->status) && $result->status == 'error' ) {
	  
	  $respond['status'] = array(
	   	'respond' => 500,
	   	'name' => $result->name,
	   	'error' => $result->error  
	  );

	  echo json_encode($respond);

	} else if(isset($result['euid'])) {

		$respond['status'] = array(
	   	'respond' => 200
	  );

	  echo json_encode($respond);

	}

?>