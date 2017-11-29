<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-1.9.1.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/customeSASS.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Exemple Formulari</title>
    <script>


        $(document).ready(function () {


            $(".menos").on('click', function (event) {

                $(this).closest('span').siblings('input').get(0).value--;
            });


            $(".mas").on('click', function (event) {
                $(this).closest('span').siblings('input').get(0).value++;
            });


        });
    </script>
    <style>
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        .custom-select:after {
            content: "\f107";
            font-family: FontAwesome;
        }
    </style>
</head>

<body>

<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Backoffice</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <i class="fa fa-trash-o" aria-hidden="true"></i>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container-fluid">

    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <hr>
                <li class="nav-item">
                    <a class="nav-link active">Overview</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link active">Overview</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link active">Overview</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview</a>
                </li>

            </ul>
        </nav>
        <div class="container col-sm-9 col-md-10">

            <div class="row">

                <div class="col-sm-12">
                    <div class="" style="height:100px;"></div>
                    <h1 class="text-center">Resumen Producto insertado</h1>
                    <div class="" style="height:100px;"></div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class=" card">
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

                                    </tbody>
                                </table>


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
                                                Confirmar </a>
                                        </div>
                                        <div class="col-lg-1"></div>
                                        <div class="col-sm-12 col-lg-auto">
                                            <button class="btn btn-warning btn-block  " id="submit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                Editar </a>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-1"></div>
                    <div class=" col-sm-5 ">
                        <div class=" card">
                            <h4 class="card-header">nº productos</h4>
                            <div class="card-body">

                                <div class="row">


                                    <?php

                                    $nom = $_POST['mida'];
                                    $marca = $_POST['marca'];
                                    $model = $_POST['model'];


                                    foreach ($nom as $mida) {
                                        $mida = strtoupper($mida);
                                        echo "
                        <div class='col-sm-auto col-md-auto col-lg-6 col-xl-6'>
                          <div class='card mb-4'>
                            <h4 class='card-header text-center'>$mida</h4>
                            
                            <div class='card-body'>
                              <p class='card-text text-center'>Seleccione la cantidad de productos para el modelo:</p>
                              <h4 class='text-center'>$marca-$model-$mida</h4>
                              <div class='row'>
                                <div class='col-sm-2'></div>
                                <div class='col-sm-auto'>
                                  <div class='input-group'>
                                    <span class='input-group-btn'>
                                      <button class='btn btn-sm btn-info menos' id='b_menos' type='button'>
                                        <i class='fa fa-minus fa-1x p-2' aria-hidden='true'></i>
                        
                                      </button>
                                    </span>
                                    <input type='number' class='form-control' id='unitats' value=\"0\">
                                    <span class='input-group-btn'>
                                      <button class=' btn btn-sm btn-info mas' type='button'>
                                        <i class='fa fa-plus fa-1x p-2' aria-hidden='true'></i>
                                      </button>
                                    </span>
                                  </div>
                                </div>
                                <div class='col-sm-2'></div>
                              </div>
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
        </div>
    </div>
</div>


</body>
</html>
