<?php
	/**
 	 *	Artiom FEDOROV
	 *
	 */


	session_start();
	error_reporting(15);
	// Define des chemins du projet
	require_once("./api.php");
	
	$controller = request::get("controller");
	$action = request::get("action");
	
	if ($controller == "") {
		$controller = "users";
	}
	
	if($action == "") {
		$action = "login";
	}
	

	if (users::isConnected()) {
		if ($controller == "") {
			$controller = "projects";
		}
	
		if($action == "") {
			$action = "index";
		}
	
		if ((file_exists(PATH_SCRIPTS . $controller . "/" . $action . ".php")) && ((PATH_TEMPLATES . $controller . "/" . $action . ".php"))) {
			require_once (PATH_SCRIPTS . $controller . "/" . $action . ".php");
			ob_start();
				require_once (PATH_TEMPLATES . $controller . "/" . $action . ".php");
			//$template_content = ob_get_contents();
			$template_content = ob_get_contents();
			ob_end_clean();
			
			require_once( PATH_TEMPLATES . "layouts/main.php");	
		} else {
			echo("ERROR::Template or script missing");
		}
		// redirection vers template 404 // error si not found
	} else {
		$controller = "users";
		$action = "login";
		require_once (PATH_SCRIPTS . $controller . "/" . $action . ".php");
		ob_start();
			require_once (PATH_TEMPLATES . $controller . "/" . $action . ".php");
		$template_content = ob_get_contents();
		ob_end_clean();
		require_once( PATH_TEMPLATES . "layouts/connect.php");	
	}
?>


