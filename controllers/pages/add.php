<?php
	// Script add pages

	echo("ZOB");


	$url = request::get("url");
	$id_site = request::get("id_site");

	if ($url != "") {

		// Obtenir le title de la page		
		$urlContents = file_get_contents($url);
		preg_match("/<title>(.*)<\/title>/i", $urlContents, $matches);
		$title = $matches[1];

		echo("test");

		sql::query('INSERT INTO pages (url, title, id_site) VALUES ("'.$url.'","'.$title.'","'.$id_site.'")');
		
		header("Location: index.php?controller=pages&action=index&id_site=".$id_site);
	
	} else {
		$error_msg = "Vous n'avez pas renseigne le champ url";
		
	}

?>
