<?php
	
	define ("PATH_CURRENT", "./" );
	define ("PATH_CONFIGS", PATH_CURRENT. "configs/");
	define ("PATH_LIBS", PATH_CURRENT . "libs/" );
	define ("PATH_SCRIPTS", PATH_CURRENT . "controllers/" );
	define ("PATH_TEMPLATES", PATH_CURRENT."templates/");
	
	// inclusion des configs
	//require_once(PATH_CONFIGS."db.php");
	//require_once(PATH_CONFIGS."user.php");
	
	// inclusion des libs
	require_once(PATH_LIBS."request.class.php");
	require_once(PATH_LIBS."sql.class.php");
	require_once(PATH_LIBS."users.class.php");
	require_once(PATH_LIBS."html.render.class.php");
