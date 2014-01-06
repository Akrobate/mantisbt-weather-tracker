<!-- template ajouter page -->

<a href="?controller=sites&action=index">liste des sites</a> - 
<a href="?controller=pages&action=index&id_site=<?=$id_site?>">liste des pages</a> - 

<div class="add">

	<h2>Ajouter une page.</h2>

	<? if (@$error_msg != "") : ?>
		<div class="error_msg">
			<?=$error_msg?>
		</div>
	<? endif; ?>

	<form action="" method="post">
		<input class="url" type="text" name="url" />
		<input class="submit" type="submit" value="Ajouter" />
	</form>
</div>
