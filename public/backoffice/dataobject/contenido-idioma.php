			<h1 class="text-left pt-1 mt-1 pb-5">Idioma</h1>

			<div id="insert" class="col-sm-12 my-4">
				<h3>Insert</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">Nombre</div>
					</div>
					<hr>
					<div class="row">
						<form action="CRUD.php" method="post" class="form-inline col-sm-12">
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="nombreInsert" id="nombreInsert" placeholder="Nombre de marca">
							</div>
							<div class="col-sm-3 form-group">
								<button type="submit" class="btn btn-primary boton-modificar mr-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="select" class="col-sm-12 my-4">
				<h3>Select</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">Nombre</div>
					</div>
					<hr>
					<div class="row">
						<form action="CRUD.php" method="post" class="form-inline col-sm-12">
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="nombre" id="nombre" placeholder="Nombre de marca">
							</div>
							<div class="col-sm-3 form-group">
								<button type="submit" class="btn btn-primary boton-modificar mr-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="delete" class="col-sm-12 my-4">
				<h3>Delete</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">ID</div>
					</div>
					<hr>
					<div class="row">
						<form action="CRUD.php" method="post" class="form-inline col-sm-12">
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="IdDelete" id="IdDelete" placeholder="ID de marca">
							</div>
							<div class="col-sm-3 form-group">
								<button type="submit" class="btn btn-primary boton-modificar mr-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="udate" class="col-sm-12 my-4">
				<h3>Udate</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3">ID</div>
						<div class="col-sm-3">Nuevo Nombre</div>
					</div>
					<hr>
					<div class="row">
						<form action="CRUD.php" method="post" class="form-inline col-sm-12">
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="IdUpdate" id="IdUpdate" placeholder="ID de marca">
							</div>
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="NomUpdate" id="NomUpdate" placeholder="Nuevo nombre de marca">
							</div>
							<div class="col-sm-3 form-group">
								<button type="submit" class="btn btn-primary boton-modificar mr-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			


