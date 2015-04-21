<div class="connection">
	<img src="public/images/weather_tracker.png" style="margin:60px;"/>
	<? if (@$error_msg != "") : ?>
		<div class="error_msg">
			<?=$error_msg?>
		</div>
	<? endif; ?>
	<form method="post">
		<table border="0">
			<!--tr>
				<td>
					<span class="shy">Serveur Mantis:</div>
				</td>
				<td>
					<select name="server">
						<option value="http://89.156.15.165/mantis/api/soap/mantisconnect.php?wsdl" selected>http://89.156.15.165/mantis</option>
					</select>
				</td>
			</tr-->
			<tr>
				<td>
					<span class="shy">Serveur Mantis:</div>
				</td>
				<td>
					<input type="text" name="server" />
				</td>
			</tr>			
			<tr>
				<td>
					<span class="shy">Login:</div>
				</td>
				<td>
					<input type="text" name="login" />
				</td>
			</tr>
			<tr>
				<td>
					<span class="shy">Mot de passe:</div>
				</td>
				<td>
						<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="connection" />
				</td>
			</tr>
		</table>
	</form>
</div>
