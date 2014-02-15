<!-- Template project/index -->

<table class="listeResults">

	<? $i = 0; ?>
	<? foreach($data as $item): ?>
		<tr class="<? if (($i%2) == 0): ?>bgJaune<? else: ?>bgVert<? endif; $i++; ?>">
			<td>
				<div class="notification">
					<? if (0) : ?>
						<img src="public/images/warning.png" width="25px;"/>
					<? else: ?>
					
						<img src="public/images/<?=$item->wnote; ?>.png" width="45px;"/>
					<? endif; ?>
				</div>
				
				<div class="tdcontent">
					<p class="title">
						<strong><?=$item->name ?></strong> 
						
						
						 <?$percent = (int)($item->issues_count['resolved'] / $item->issues_count['All'] * 100) ; ?>
						
						</p>
					<p class="secondLine">
					<span class="timing"><?=html::secondsToRemainingTime($item->deltatime) ?></span>
					</p>

				</div>
				<div style="float:right;margin-right:20px; margin-top:10px;">
					<div class="indicatorbar" style='100px;height:12px;position:relative;' border="0" >
								<div style="font-size:10px; font-weight:bold; text-align:center;color:#FFF;position:absolute; width:100px; height:10px;top:0px;left:0px;">	<?=$percent?> %</div>
							
								<div class="doneZone" style="width:<?=$percent?>px; height:100%; float:left;background-color:green">
								</div>
								
								<div class="doneZone" style="width:<?=100-$percent?>px; height:100%; float:left;background-color:red">
								</div>
								<div style="clear:both;"></div>

						 </div>
				</div>
				
				<div style="float:right;margin-right:20px; margin-top:10px;">
					<?=html::getIssuesBar($item->issues_count, 100, 12); ?>
				</div>
				
			</td>
		</tr>
	<? endforeach; ?>
</table>
