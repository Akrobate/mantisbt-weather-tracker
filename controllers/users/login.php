<?php
	
	// Script de connection //

	$login = request::get("login");
	$password = request::get("password");
	$server = request::get("server");
	
	$server = "http://" . $server . "/api/soap/mantisconnect.php?wsdl";
	
	$connected = false;

	if (($login != "") && ($password != "")) {
		try {
			$c = new SoapClient($server);
			$responseObj = $c->mc_login($login, $password);
			$connected = true;
		} catch (Exception $e){
			$response = array();
			$connected = false;
		}
		if ($connected) {
			users::forceConnected($login, $password, $server, $responseObj);
			header("Location: index.php?controller=projects&action=index");
		} else {
			$error_msg = "Connection impossible, erreur de mot de passe ou de login";
		}
	}
	
?>
