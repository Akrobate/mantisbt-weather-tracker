<!-- Template pages/index -->

<a href="?controller=sites&action=index">liste des sites</a> -
<a href="?controller=pages&action=add&id_site=<?=$id_site?>">ajouter une page</a>
<table class="listeResults">

	<? $i = 0; ?>
	<? foreach($data as $item): ?>
		<tr class="<? if (($i%2) == 0): ?>bgJaune<? else: ?>bgVert<? endif; $i++; ?>">
			<td>
				<div class="notification">
					<? if (flux::pageCheckNew($item['id'])) : ?>
						<img src="public/images/warning.png" width="25px;"/>
					<? else: ?>
						<img src="public/images/page.png" width="25px;"/>
					<? endif; ?>
				</div>
				
				<div class="tdcontent">
					<p class="title"><?=$item['title']?></p>
					<div class="actions">
						<a href="?controller=links&action=index&id_page=<?=$item['id']?>&id_site=<?=$id_site?>">voir les liens</a> - 
						<a href="?controller=links&action=add&id_page=<?=$item['id']?>&id_site=<?=$id_site?>">ajouter un lien</a> - 
						<a href="?controller=pages&action=delete&id=<?=$item['id']?>&id_site=<?=$id_site?>">effacer</a>
					</div>
					<p class="url"><?=$item['url']?></p>
				</div>
			</td>
		</tr>
	<? endforeach; ?>
</table>
