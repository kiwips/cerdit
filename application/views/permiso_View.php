<div class="row">
	<div class="col-md-4 col-md-offset-4">	
		<table class="table table-border">
			<tr>
				<th style="border-top: 0;">Nick</th>
				<th style="border-top: 0;">Permiso</th>
			</tr>
			{user}			
			<tr>
				<?=form_open('/permiso')?>
				<td style="width: 5%;"> <input name="nickP" value="{USR_nick}" readonly style="border: 0px;"></td>
				<td style="width: 5%;"> {USR_permiso} </td>				
				<td>
					<select name="permiso" id="selectorPermisos">
						<option value="Admin">Admin</option>
						<option value="User">User</option>
					</select>
					<button  type="submit"><span class="glyphicon glyphicon-save tamanoGP"></span></button>						
				</td>
				<?=form_close()?>
			</tr>
			{/user}
		</table>
	</div>
</div>
<div align="center">
	{permisoCorrecto}
</div>
