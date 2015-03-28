<?php

class users {

	private static $connected = null;
	
	public static function connect($login, $pw) {
		if( (ADMIN_LOGIN == $login) && (ADMIN_PASSWORD == $pw)) {
			self::$connected = true;
			$_SESSION['user']['connected'] = true;
			return true;
		} else {
			self::$connected = false;
			$_SESSION['user']['connected'] = false;
			return false;
		}
	}

	public static function logout() {
		@$_SESSION['user']['connected'] = false;
		self::$connected = false;
		return true;
	}

	public static function isConnected() {
	
		if (@$_SESSION['user']['connected'] == true) {
			self::$connected = true;
			return true;
		} else {
			self::$connected = false;
			return false;
		}	
	}
	
	
	public static function forceConnected($login, $pw, $server, $obj) {
		$_SESSION['user']['connected'] = true;
		$_SESSION['user']['login'] = $login;
		$_SESSION['user']['pw'] = $pw;
		$_SESSION['user']['connectedObj'] = $obj;
		$_SESSION['user']['server'] = $server;
	}
	
	public static function getLogin() {
		return $_SESSION['user']['login'];
	}
	
	public static function getPassword() {
		return $_SESSION['user']['pw'];
	}
	
	public static function getServer() {
		return $_SESSION['user']['server'];
	}
	
	
	
}


?>
