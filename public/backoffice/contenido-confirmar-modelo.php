<script>


    $(document).ready(function () {

      $("#taulaStock").hide();

        $("#stockSi").on('click', function (event) {
            $("#taulaStock").show("3000");

        });
        $("#stockNo").on('click', function (event) {
            $("#taulaStock").hide(3000);

        });
        $(".menos").on('click', function (event) {

            $(this).closest('span').siblings('input').get(0).value--;
        });


        $(".mas").on('click', function (event) {
            $(this).closest('span').siblings('input').get(0).value++;
        });


    });
</script>


<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class=" card " id="test">
                <h4 class="card-header">Resumen</h4>
                <div class="card-body">


                    <table class="table" id="tablaResultados">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Campo</th>
                            <th scope="col">Valor</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Model</th>
                            <td><?php echo $_POST["model"]; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">Marca</th>
                            <td><?php echo $_POST["marca"]; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">tipus</th>
                            <td><?php echo $_POST["tipus"]; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">cuadro</th>
                            <td><?php echo $_POST["cuadro"]; ?></td>

                        </tr>

                        <tr>
                            <th scope="row">Descripcio 1</th>
                            <td><p><?php echo $_POST["cat"]; ?></p></td>

                        </tr>
                        <tr>
                            <th scope="row">Medidas:</th>

                            <td> <?php
                                $nom = $_POST['mida'];
                                foreach ($nom as $mida) {
                                    $mida = strtoupper($mida);
                                    echo "<div class=\"border border-primary rounded  m-1 p-2 d-inline-block text-center \" style=\"width: 40px\">$mida</div>";
                                } ?>

                            </td>


                        </tr>


                        </tbody>
                    </table>


                </div>
            </div>
            <div class="card mt-3">
                <h4 class="card-header"></h4>
                <div class="card-body">
                    <div class="container">
                        <div class="row ">
                            <div class="text-inline mr-5">
                                <p>¿Desea introducir el Stock ahora?</p>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="stockSi"
                                           value="option1"> Si
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="stockNo"
                                           value="option2" checked> No
                                </label>
                            </div>

                        </div>
                        <div id="taulaStock" class="row ">
                            <table class="table" id="tablaStockInterior">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Cantidad</th>

                                </tr>
                                </thead>
                                <tbody>


                                <?php

                                $nom = $_POST['mida'];
                                $marca = $_POST['marca'];
                                $model = $_POST['model'];
                                foreach ($nom as $mida) {
                                    $mida = strtoupper($mida);
                                    echo "   <tr><th scope='row'>



                                        <p>$marca-$model-$mida</p></th>
                                        <td>


                                          <div class='input-group '>
                          <span class='input-group-btn'>
                            <button class='btn btn-sm btn-warning menos' id='b_menos' type='button'>
                              <i class='fa fa-minus fa-1x p-2' aria-hidden='true'></i>

                            </button>
                          </span>
                          <input type='number' class='form-control' id='unitats' value=\"0\">
                          <span class='input-group-btn'>
                            <button class=' btn btn-sm btn-warning mas' type='button'>
                              <i class='fa fa-plus fa-1x p-2' aria-hidden='true'></i>
                            </button>
                          </span>
                        </div>



                                                </td></tr>";
                                } ?>


                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <h4 class="card-header"></h4>
                <div class="card-body">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-2"></div>
                            <div class="col-sm-12 col-lg-auto">
                                <button class="btn btn-success btn-block  " id="submit">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                    Confirmar
                                </button>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-sm-12 col-lg-auto">
                                <button class="btn btn-warning btn-block  " id="submit">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Editar
                                </button>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class=" col-sm-4 ">
            <div class=" card">
                <h4 class="card-header">Fotos</h4>
                <div class="card-body">

                    <div class="row">


                        <?php


                        foreach ($nom as $mida) {

                            echo "
              <div class='col-sm-auto col-md-auto col-lg-6 col-xl-6'>
                <div class='card mb-4'>
                  <h4 class='card-header text-center'>FOTO</h4>

                  <div class='card-body'>


                          <img class='w-100' src='../img/bici1.jpg' alt=''>



                        </div>
                      </div>

                    </div>



";
                        }

                        ?>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
