
<div class="container">
	<div class="row">
		<div class=" card col-sm-12" id="test">
			<h4 class="card-header">Resumen</h4>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Campo</th>
							<th scope="col">Valor</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">ID</th>
							<td><?php echo $_POST["id"]; ?></td>

						</tr>
						<tr>
							<th scope="row">Nombre</th>
							<td><?php echo $_POST["nombre"]; ?></td>

						</tr>
						<tr>
							<th scope="row">URL</th>
							<td><?php echo $_POST["url"]; ?></td>

						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>