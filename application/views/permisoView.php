<?=form_open('/permiso')?>
	<select name="user">
		{user}
			<option value={USR_nick}>{USR_nick} {USR_permiso}</option>
		{/user}
	</select>
	<select name="permiso">
		<option value="Admin">Admin</option>
		<option value="User">User</option>
	</select>
	<input type="submit" value="Enviar">
	<br>
	<br>
	<p>Introduce el nick del usuario</p>
	<select name="user">
		{user}
			<option value={USR_nick}>{USR_nick}</option>
		{/user}
	</select>
	<input type="submit" value="xxx">
<?=form_close()?>
