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
	<div id="tablita"  class="col-sm-12">
		<h1 class="text-left pt-1 mt-1 pb-5">MARCAS</h1>
		<div class="row">
			<div class="col-sm-3"><button type="button" class="btn btn-primary boton-insertar">insertar <i class="fa fa-plus-circle" aria-hidden="true"></i></button></div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-3">#ID</div>
			<div class="col-sm-3">Nombre</div>
			<div class="col-sm-3">url</div>
			<div class="col-sm-3">Acciones</div>
		</div>
		<hr>
		<div class="row">
			<form action="pruebasmarcas.php" method="post" class="form-inline col-sm-12">
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="id" id="id" placeholder="id de marca" value="0001" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="nombre" id="nombre" placeholder="Nombre de marca" value="Specialized" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="url" id="url" placeholder="url" value="todo perfect" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<button type="button" class="btn btn-warning boton-modificar mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					<button type="button" class="btn btn-danger boton-borrar"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</div>
			</form>
		</div>
		<hr>
		<div class="row">
			<form  action="pruebasmarcas.php" method="post"  class="form-inline col-sm-12">
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="id"  id="id" placeholder="id de marca" value="0002" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="nombre"  id="nombre" placeholder="Nombre de marca" value="Scott" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="url"  id="url" placeholder="url" value="todo perfect 2" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<button type="button" class="btn btn-warning boton-modificar mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					<button type="button" class="btn btn-danger boton-borrar"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</div>
			</form>
		</div>
		<hr>
		<div class="row">
			<form  action="pruebasmarcas.php" method="post"  class="form-inline col-sm-12">
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="id"  id="id" placeholder="id de marca" value="0003" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="nombre"  id="nombre" placeholder="Nombre de marca" value="Trek" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="url"  id="url" placeholder="url" value="todo perfect 2" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<button type="button" class="btn btn-warning boton-modificar mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					<button type="button" class="btn btn-danger boton-borrar"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</div>
			</form>
		</div>
		<hr>
		<div class="row">
			<form  action="pruebasmarcas.php" method="post"  class="form-inline col-sm-12">
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="id"  id="id" placeholder="id de marca" value="0004" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="nombre"  id="nombre" placeholder="Nombre de marca" value="Merida" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="url"  id="url" placeholder="url" value="todo perfect 2" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<button type="button" class="btn btn-warning boton-modificar mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					<button type="button" class="btn btn-danger boton-borrar"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</div>
			</form>
		</div>
		<hr>
		<div class="row">
			<form  action="pruebasmarcas.php" method="post"  class="form-inline col-sm-12">
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="id"  id="id" placeholder="id de marca" value="0005" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="nombre"  id="nombre" placeholder="Nombre de marca" value="Cannondale" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<input type="text" class="form-control col-sm-12" name="url"  id="url" placeholder="url" value="todo perfect 2" disabled>
				</div>
				<div class="col-sm-3 form-group">
					<button type="button" class="btn btn-warning boton-modificar mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					<button type="button" class="btn btn-danger boton-borrar"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</div>
			</form>
		</div>
		<hr>
	</div>

