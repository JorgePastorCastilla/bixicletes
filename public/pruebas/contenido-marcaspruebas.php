<script>
	$(document).ready(function () {

		//BOTON PARA BORRAR MARCAS
		
		$(".row").on("click",".boton-borrar",function(){
			//$(this).closest("div.row").remove();
			$(this).closest("div.row").prev("hr").remove();
			$(this).closest("div.row").remove();

		});


		//BOTON PARA INSERTAR MARCAS
		
		$("#tablita").on("click",".boton-insertar",function(){
			$("#tablita>.row:nth-of-type(2)").after('<hr>\
				<div class="row"> \
				<form action="pruebasmarcas.php" method="post" class="form-inline col-sm-12"> \
				<div class="col-sm-3 form-group"> \
				<input type="text" class="form-control col-sm-12" name="id" id="id" placeholder="id de marca"> \
				</div> \
				<div class="col-sm-3 form-group"> \
				<input type="text" class="form-control col-sm-12" name="nombre" id="nombre" placeholder="Nombre de marca"  > \
				</div> \
				<div class="col-sm-3 form-group"> \
				<input type="text" class="form-control col-sm-12" name="url" id="url" placeholder="url"  > \
				</div> \
				<div class="col-sm-3 form-group"> \
				<button type"button" class="btn btn-success boton-modificar mr-1"><i class="fa fa-floppy-o" aria-hidden="true"></i></button> \
				<button type="button" class="btn btn-danger boton-borrar"><i class="fa fa-trash" aria-hidden="true"></i></button> \
				</div> \
				</form> \
				</div>');
		});


		

		//BOTON PARA MODIFICAR MARCAS
		//$(".boton-modificar").on("click",function(){
			$("#tablita").on("click",".boton-modificar",function(){

				if ( $(this).hasClass('guardar') )  {
					$(this).removeClass('guardar');
					$(this).prop('type', 'sumbit');

				// AQUI HACER ALGO PARA GUARDARLO
				//$(this).closest('form').find('input').attr('disabled','true');
				//$(this).children().removeClass('fa-floppy-o');
				//$(this).children().addClass('fa-pencil');
			}else {
				$(this).addClass('guardar');
				$(this).closest('form').find('input').removeAttr('disabled');
				$(this).children().removeClass('fa-pencil');
				$(this).children().addClass('fa-floppy-o');
				$(this).removeClass('btn-warning');
				$(this).addClass('btn-success');
				//$(this).prop('type', 'sumbit');
			}
			
		});

		});


	</script>

	<h1 class="text-left pt-1 mt-1 pb-5">MARCAS</h1>
	<div id="tablita"  class="col-sm-12">	
		<div class="row">
			<div class="col-sm-3"><button type="button" class="btn btn-primary boton-insertar">insertar <i class="fa fa-plus-circle" aria-hidden="true"></i></button></div>
		</div>
		<hr>TBL_PAGO
		<div class="row">
			<div class="col-sm-3">#ID</div>
			<div class="col-sm-3">Nombre</div>
			<div class="col-sm-3">url</div>
			<div class="col-sm-3">Acciones</div>
		</div>
		<?php

		include("conexion.php"); 

		$sql = "SELECT idMarca,nombreMarca,webURL FROM Marca";

		$result=$base->query($sql);

		if ($result->num_rows > 0) {
    	// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<br> id: ". $row["idMarca"]. " - Name: ". $row["nombreMarca"]. " " . $row["webURL"] . "<br>";
			}
		} else {
			echo "0 results";
		}


		?>
		<hr>
	</div>