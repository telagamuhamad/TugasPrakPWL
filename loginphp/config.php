<?php
	require_once 'vendor/autoload.php';

	$google_client = new google_client();
	
	$google_client->setClientId('1082866727672-9j40hkmejhit2pdrac4o0fc3imv2h2tv.apps.googleusercontent.com');
	$google_client->setClientSecret('noxicqhLlPx2B7L1Ssj3eoSF');
	$google_client->setRedirectUri('http://localhost/loginphp/index.php');
	$google_client->addScope('email');
	$google_client->addScope('profile');

	session_start();
?>