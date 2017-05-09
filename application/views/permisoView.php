<?=form_open('/permiso')?>
	<select name="user">
		{user}
			<option value={USR_nick}>{USR_nick}</option>
		{/user}
	</select>
	<select name="permiso">
		<option value="Admin">Admin</option>
		<option value="User">User</option>
	</select>
	<input type="submit" value="Enviar">
<?=form_close()?>
