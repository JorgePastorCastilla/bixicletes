<?php
include_once "Idioma.php";
?>
<script>
	$(document).ready(function () {

		//BOTON PARA BORRAR MARCAS
		
		$(".row").on("click",".boton-borrar",function(){
			$(this).closest('form').find('input').removeAttr('disabled');
			//$(this).closest("div.row").remove();
		//	$(this).closest("div.row").prev("hr").remove();
		//	$(this).closest("div.row").remove();

	});


		//BOTON PARA INSERTAR MARCAS
		
		$("#tablita").on("click",".boton-insertar",function(){
			$("#tablita>.row:nth-of-type(2)").after('<hr>\
				<div class="row"> \
				<form action="CRUD-idioma.php" method="post" class="form-inline col-sm-12"> \
				<div class="col-sm-3 form-group"> \
				<input type="text" class="form-control col-sm-12" name="idInsert" id="id" placeholder="id de Idioma" disabled> \
				</div> \
				<div class="col-sm-3 form-group"> \
				<input type="text" class="form-control col-sm-12" name="nombreInsert" id="nombre" placeholder="Nombre de Idioma"  > \
				</div> \
				<div class="col-sm-3 form-group"> \
				<button type"submit" class="btn btn-success boton-modificar mr-1"><i class="fa fa-floppy-o" aria-hidden="true"></i></button> \
				</div> \
				</form> \
				</div>');
		});


		

		//BOTON PARA MODIFICAR MARCAS
		//$(".boton-modificar").on("click",function(){
			$("#tablita").on("click",".boton-modificar",function(){

				if ( $(this).hasClass('guardar') )  {
					$(this).removeClass('guardar');
					$(this).closest('form').find('input').removeAttr('disabled');
					$(this).prop('type', 'sumbit');

				// AQUI HACER ALGO PARA GUARDARLO
				//$(this).closest('form').find('input').attr('disabled','true');
				//$(this).children().removeClass('fa-floppy-o');
				//$(this).children().addClass('fa-pencil');
			}else {
				$(this).addClass('guardar');
				$(this).closest('form').find('input.unlock').removeAttr('disabled');
				$(this).children().removeClass('fa-pencil');
				$(this).children().addClass('fa-floppy-o');
				$(this).removeClass('btn-warning');
				$(this).addClass('btn-success');
				//$(this).prop('type', 'sumbit');
			}
			
		});

		});


	</script>
	<div id="tablita"  class="col-sm-12">
		<h1 class="text-left pt-1 mt-1 pb-5">IDIOMAS</h1>
		<div class="row">
			<div class="col-sm-3"><button type="button" class="btn btn-primary boton-insertar">insertar <i class="fa fa-plus-circle" aria-hidden="true"></i></button></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-3">#ID</div>
			<div class="col-sm-3">Nombre</div>
			<div class="col-sm-3">Acciones</div>
		</div>
		<hr>
		<?php $formes = Idioma::selectAll();
		foreach ($formes as $value) {
			foreach ($value as $test) { ?>
			<div class="row">
				<form action="CRUD-idioma.php" method="post" class="form-inline col-sm-12">
					<div class="col-sm-3 form-group">
						<input type="text" class="form-control col-sm-12" name="id" id="id" placeholder="id de Idioma" value='<?php echo $test->getValueEncoded("idIdioma"); ?>' disabled>
					</div>
					<div class="col-sm-3 form-group">
						<input type="text" class="form-control col-sm-12 unlock" name="nombre" id="nombre" placeholder="Nombre de Idioma" value='<?php echo $test->getValueEncoded("nombreIdioma"); ?>' disabled>
					</div>
					<div class="col-sm-3 form-group">
						<button type="button" class="btn btn-warning boton-modificar mr-1" name="submit" value="update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
						<button type="submit" class="btn btn-danger boton-borrar" name="submit" value="borrar"><i class="fa fa-trash" aria-hidden="true"></i></button>
					</div>
				</form>
			</div>
			<hr>
			<?php }

		} ?>
	</div>

