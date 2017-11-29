			<?php
			include_once "Idioma.php";
			?>
			<h1 class="text-left pt-1 mt-1 pb-5">Idioma</h1>
			<hr>

			<div id="insert" class="col-sm-12 my-4">
				<h3>Insert</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3 text-center font-weight-bold mb-3">Nombre</div>
					</div>
					<div class="row">
						<form action="CRUD-idioma.php" method="post" class="form-inline col-sm-12">
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="nombreInsert" id="nombreInsert" placeholder="Nombre de idioma">
							</div>
							<div class="col-sm-3 form-group">
								<button type="submit" class="btn btn-primary boton-modificar mr-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<hr>
			<div id="delete" class="col-sm-12 my-4">
				<h3>Delete</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3 text-center font-weight-bold mb-3">ID</div>
					</div>
					<div class="row">
						<form action="CRUD-idioma.php" method="post" class="form-inline col-sm-12">
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="IdDelete" id="IdDelete" placeholder="ID de idioma">
							</div>
							<div class="col-sm-3 form-group">
								<button type="submit" class="btn btn-primary boton-modificar mr-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<hr>
			<div id="udate" class="col-sm-12 my-4">
				<h3>Udate</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3 text-center font-weight-bold mb-3">ID</div>
						<div class="col-sm-3 text-center font-weight-bold mb-3">Nuevo Nombre</div>
					</div>
					<div class="row">
						<form action="CRUD-idioma.php" method="post" class="form-inline col-sm-12">
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="IdUpdate" id="IdUpdate" placeholder="ID de idioma">
							</div>
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="NomUpdate" id="NomUpdate" placeholder="Nuevo nombre de idioma">
							</div>
							<div class="col-sm-3 form-group">
								<button type="submit" class="btn btn-primary boton-modificar mr-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<hr>
			<div id="select" class="col-sm-12 my-4">
				<h3>Select</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3 text-center font-weight-bold mb-3">Nombre</div>
					</div>
					<div class="row">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-inline col-sm-12">
							<div class="col-sm-3 form-group">
								<input type="text" class="form-control col-sm-12" name="IdSelect" id="IdSelect" placeholder="ID de idioma a buscar">
							</div>
							<div class="col-sm-3 form-group">
								<button type="submit" class="btn btn-primary boton-modificar mr-1"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
					<div id="tablita-resul"  class="col-sm-12 mt-4">
						<div class="row">
							<div class="col-sm-3 font-weight-bold">ID</div>
							<div class="col-sm-3 font-weight-bold">Nombre</div>
						</div>
						<hr>
						<div class="row">
							<?php if (!empty($_POST)): ?>
								<div class="col-sm-3"IdSelect>
									<?php echo $_POST['IdSelect'] ?>
								</div>
								<div class="col-sm-3"IdSelect>
									<?php echo Idioma::select($_POST['IdSelect'])->getValueEncoded("nombreIdioma"); ?>

								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div id="idiomas" class="col-sm-12 my-4">
				<h3>IDIOMAS</h3>
				<div id="tablita-insert"  class="col-sm-12">
					<div class="row">
						<div class="col-sm-3 font-weight-bold">ID</div>
						<div class="col-sm-3 font-weight-bold">Nombre</div>
					</div>
					<hr>
					<!--<div class="row">
						<div class="col-sm-3">Aqui va la ID</div>
						<div class="col-sm-3">Aqui va el nombre</div>
					</div>-->
					<?php $formes = Idioma::selectAll();
					foreach ($formes as $value) {
						foreach ($value as $test) { ?>
						<div class="row">
							<div class="col-sm-3">  <?php echo $test->getValueEncoded("idIdioma"); ?></div>
							<div class="col-sm-3">  <?php echo $test->getValueEncoded("nombreIdioma"); ?></div>
						</div>
						<hr>
						<?php }

					} ?>
				</div>
			</div>
			


