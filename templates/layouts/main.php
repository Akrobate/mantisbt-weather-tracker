<html>
	<head>
		<link rel=stylesheet type="text/css" href="public/css/style.css" />
		<script src="public/js/jquery.js"></script>
		<script>
			$(document).ready(function() {
				$('.listeResults td').hover(function() {
					$(this).find('.actions').show();
					$(this).find('.url').show();
				}, function() {
					$(this).find('.actions').hide();
					$(this).find('.url').hide();
				});
			});
		</script>
	</head>
	<body>
		<div class="main">
			<div class="header ">
				<div>
					<img src="public/images/weather_tracker.png" style="float:right;"/>
				
				<? if (isset($_SESSION['BlockMeteoGenerale'])):?>
					<div style="float:left">
						<h3 style="font-size:14px; color:#444;text-align:center; width:100%">M&eacute;t&eacute;o du jour</h3>
						<div style="text-align:center; margin-bottom:30px;">
							<img src="public/images/<?=$_SESSION['BlockMeteoGenerale']; ?>.png" width="100px;"/>
						</div>
					</div>
				<? endif;?>
				
					<div style="clear:both"></div>
				
				</div>
				
			</div>
			<div class="leftZone" style="margin-top:20px;">
				
				<div class="indicators">
					<a href="#">Le plus recent <br/><?=html::secondsToRemainingTime(time() - $most_new_proj) ?></a><br /><br />
					<a href="#">Le plus ancien<br/><?=html::secondsToRemainingTime(time() - $most_old_proj) ?></a><br /><br/>
					<a href="#">Aplitude<br/> <?=html::secondsToRemainingTime($most_new_proj - $most_old_proj) ?></a><br /><br/>
				</div>
				
				<a href="?controller=users&action=logout">Deconnection</a><br />
				<br />
				<a href="#">Aide</a><br />
				<a href="#">A propos</a><br />
			</div>
			<div class="mainZone">
				<?=$template_content?>
			</div>
			<div class="spacer"></div>
		</div>
	</body>
</html>
