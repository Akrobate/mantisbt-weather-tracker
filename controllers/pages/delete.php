<?php

	$id = request::get("id");
	$id_site = request::get("id_site");
	
	sql::query("DELETE FROM pages WHERE id=".$id);
	
	if ($id_site == "") {
		header("Location: index.php?controller=sites&action=index");
	} else {
			header("Location: index.php?controller=pages&action=index&id_site=".$id_site);
	 }
	



?>
