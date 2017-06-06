<div class="row">
	<div class="col-md-7 col-md-offset-2">
		<table class="table table-condensed" align="center">    
			<thead>
		      <tr>
		        <th>Nombre</th>
		        <th>Tienda</th>
		        <th>Precio</th>
		        <th>&nbsp;</th>
		      </tr>
		    </thead>
		    <tbody>
				{todoCarrito}
					<tr>
						<td>{PC_nombre}</td>
						<td>{PC_tienda}</td>
						<td>{PC_precio} €</td>
						<td><a href="borrarProducto?pk={PK_PC}"><button class="btn btn-danger">X</button></a></td>
					</tr>
				{/todoCarrito}
			</tbody>	
		</table>	
	</div>
</div>

