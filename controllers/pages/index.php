<?php
	// Script Sites/index
	
	// TODO: Security check!
	// TODO: Pagination script sites index
	
	$id_site = request::get('id_site');
	
	$data = array();
	
	if ($id_site != "") {
		sql::query("SELECT * FROM pages WHERE id_site={$id_site} ORDER BY title ASC");
		$data = sql::fetchArray();
	}
	
	
?>
