<script>

  $(document).ready(function () {

    function validaCheckboxes() {
      if ($(':checkbox:checked').length == 0) {
        $(":checkbox").attr('required', 'required');
      } else {
        $(":checkbox").removeAttr('required');
      }
    }

    $("#submit").click(function (event) {
      validaCheckboxes();
      $("form").addClass('was-validated');

    });

    function mostrarImagen(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          var preview = $('#im').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#fileInput").change(function () {

      $(function () {
        $("#sortable").sortable({placeholder: "ui-state-highlight", distance: 40});
        $("#sortable").disableSelection();
      });

      $("#sortable").prepend($(
        '<div class="card m-3 bg-info text-center" ><img id="im" class="card-img-top" style="width: 170px; height: 170px;" src="" alt="Card image cap"><div class="card-body"><i class="mr-4 dreta fa fa-arrows fa-2x" aria-hidden="true"></i><i class="ml-4 basu' +
        'ra fa fa-trash-o fa-2x " aria-hidden="true" ></i></div></div>'
      ).hide().fadeIn(2000));

      mostrarImagen(this);

      $(".basura").on('click', function (event) {

        $(this).closest(".card").fadeOut(1000, function () {
          $(this).closest(".card").remove();
        });

      });

    });

  });
</script>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-11">
    <div class="" style="height:100px;"></div>
    <h1>INSERTAR NUEVOS MODELOS</h1>
    <div class="" style="height:100px;"></div>
  </div>
</div>

<form action="confirmar-insertar-modelo.php" method="post">
  <hr>
  <div class=" form-group row">

    <div class="col-sm-6">
      <div class="form-group row">
        <div class="col-sm-2 "></div>
        <label for="model" class=" col-sm-auto form-control-label">* Modelo :
        </label>
        <div class=" col-sm-auto">
          <input type="text" class="form-control" name="model" id="model" placeholder="Model" required="required">

        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group row">
        <label for="marca" class="col-sm-auto form-control-label">* Marca :</label>
        <div class="col-sm-auto ">

          <select class="form-control  marca d-block" name="marca" required="required">
            <option value="">Seleccioni la marca</option>
            <option value="orbea">orbea</option>
            <option value="Steevens">Steevens</option>
            <option value="BTwin">B'Twin</option>
          </select>

        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </div>

  <hr>

  <div class="form-group row">
    <div class="col-sm-6">
      <div class="form-group row">
        <div class="col-sm-2"></div>
        <label for="cuadro" class="col-sm-auto form-control-label">* Cuadro :</label>
        <div class="col-sm-auto">
          <input type="text" class="form-control  " name="cuadro" id="cuadro" placeholder="Cuadro" required="required">
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group row">

        <label for="tipus" class="col-sm-auto form-control-label">* Tipus :</label>
        <div class="col-sm-auto">
          <select class="  tipus form-control  d-block " name="tipus" required="required">
            <option value="">Seleccioni el Tipus</option>
            <option value="Mountain Bike">Mountain Bike</option>
            <option value="Treking">Treking</option>
            <option value="Plegable">Plegable</option>
            <option value="Tandem">Tandem</option>
            <option value="Electrica">Electrica</option>
            <option value="BMX">BMX</option>
            <option value="Fat Bike">Fat Bike</option>
            <option value="Triathlon">Triathlon</option>
            <option value="Chopper">Chopper</option>
          </select>
        </div>

      </div>
    </div>

  </div>
  <hr>
  <div class="form-group row">
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
      <div class="form-group row">

        <div class="col-sm-auto">
          <label for="mides">
            * Medidas:</label>
        </div>

        <div id="grupoMedidas" class="form-check custom-controls-stacked col-sm-auto">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" name="mida[]" value="xs" class="custom-control-input" id="xs">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">XS (47-49 cm) (14"-15")</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" name="mida[]" value="s" class="custom-control-input" id="s">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">S (49-53cm) (15"-17")</span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" name="mida[]" value="m" class="custom-control-input" id="m">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">M (53-57cm) (17"-19")
            </span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" name="mida[]" value="l" class="custom-control-input" id="l">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">L (57-61cm) (19"-21")
            </span>
          </label>
          <label class="custom-control custom-checkbox">
            <input type="checkbox" name="mida[]" value="xl" class="custom-control-input" id="xl">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">XL (+61cm) (+22")</span>
          </label>

        </div>
      </div>
    </div>
    <div class="col-sm-7">
      <div class="form-group row">
        <div class="col-sm-auto">
          <label for="card">
            Descripcio:</label>
        </div>
        <div class="col-sm-10">
          <!-- Nav tabs -->
          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="cat-tab" data-toggle="tab" href="#cat" role="tab" aria-controls="cat" aria-selected="true"><img src="../img/catf.png" alt="uk"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="es-tab" data-toggle="tab" href="#es" role="tab" aria-controls="es" aria-selected="false"><img src="../img/esf.png" alt="uk"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="it-tab" data-toggle="tab" href="#it" role="tab" aria-controls="it" aria-selected="false"><img src="../img/itf.png" alt="uk"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="uk-tab" data-toggle="tab" href="#uk" role="tab" aria-controls="uk" aria-selected="false"><img src="../img/ukf.png" alt="uk"></a>
                </li>
              </ul>
            </div>

            <!-- Tab panes -->
            <div class="tab-content card-body">
              <div class="tab-pane active" id="cat" role="tabpanel" aria-labelledby="cat-tab">

                <textarea class="form-control" rows="3" id="cata" name="cat" required="required"></textarea>
              </div>
              <div class="tab-pane" id="es" role="tabpanel" aria-labelledby="es-tab">
                <textarea class="form-control" rows="3" id="esa" name="es"></textarea>
              </div>
              <div class="tab-pane" id="it" role="tabpanel" aria-labelledby="it-tab">
                <textarea class="form-control" rows="3" id="ita"></textarea>
              </div>
              <div class="tab-pane" id="uk" role="tabpanel" aria-labelledby="uk-tab">
                <textarea class="form-control" rows="3" id="uka"></textarea>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-sm-1"></div>
  </div>
  <hr>

  <div class=" form-group row ">
    <div class="col-sm-1"></div>
    <label for="model" class="col-sm-auto form-control-label">* Fotos :
    </div>
    <div class=" row ">
      <div class="col-sm-1"></div>
      <div class="col-sm-10 border border-primary rounded bg-light form-inline" id="galeriatop">
        <div class="form-inline" id="sortable">
          <input id="fileInput" type="file" style="display:none;"/>

          <button id="b_pujar_img" type="button" class="btn btn-info rounded-circle m-4" onclick="document.getElementById('fileInput').click();">
            <i class="fa fa-plus fa-3x p-2" aria-hidden="true"></i>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>

      <hr>

      <div class="form-group row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4 ">
          <button class="btn btn-primary btn-block  " id="submit">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
            Pujar Model</button>
        </div>
        <div class="col-sm-4"></div>
      </div>
      <hr>

    </form>
