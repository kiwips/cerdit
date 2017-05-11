<div class="row">
	<div class="col-md-4 col-md-offset-4">	
		<table class="table table-border">
			<tr>
				<th>Nick</th>
				<th>Permiso</th>
			</tr>
			{user}
			<tr>
				<td>{USR_nick}</td>
				<td>{USR_permiso}</td>
				<td>
					<?=form_open('/permiso')?>
						<select name="permiso">
							<option value="Admin">Admin</option>
							<option value="User">User</option>
						</select>
						<button id="guardarPermiso" type="submit"><span class="glyphicon glyphicon-save"></span></button>
					<?=form_close()?></td>
				</tr>
				{/user}
			</table>
		</div>
	</div>




	<a href="Comparador"><span class="glyphicon glyphicon-log-out"></span> Volver </a>
