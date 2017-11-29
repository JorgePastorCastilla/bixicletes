<?php
include_once "FormaPago.php";
include_once "Idioma.php";
include_once "IdiomaFormaPago.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/jquery-1.9.1.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/backoffice.css">
    <link rel="stylesheet" type="text/css" href="../css/customeSASS.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <title>Exemple Formulari</title>

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
<div class="container">


    <div class="row">
        <div class="col-sm-3">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">INSERT</div>
                <div class="card-body">
                    <form class="form" action="CRUD.php" method="post">
                        <p>Introduesqui el nom d'una forma de pagament que vulgui insertar:</p>

                        <input type="text" name="textInsert"><br><br>
                        <button type="submit" class="button" name="submit" value="insert">ejecutar INSERT
                        </button>
                    </form>
                </div>
            </div>
            <div class="card border-danger mb-3" style="max-width: 20rem;">
                <div class="card-header">DELETE</div>
                <div class="card-body">
                    <form class="form" action="CRUD.php" method="post">
                        <p>Introduesqui l'id que vol eliminar</p>
                        <input type="text" name="IdDelete" value=""><br><br>
                        <button type="subm  it" class="button" name="submit" value="delete">ejecutar DELETE
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-sm-3">
            <div class="card border-warning mb-3" style="max-width: 20rem;">
                <div class="card-header">UPDATE</div>
                <div class="card-body">
                    <form class="form" action="CRUD.php" method="post">
                        <p> Introduesqui l'id que vol canviar</p>
                        <input type="text" name="IdUpdate" value="">
                        <p>Introduesqui el nou nom de la forma de pagament</p>
                        <input type="text" name="NomUpdate" value=""> <br><br>
                        <button type="submit" name="submit">ejecutar UPDATE</button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-3">

            <div class="card border-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">SELECT</div>
                <div class="card-body">
                    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                        Introduesqui la ID que vol cercar: <input type="text" name="IdSelect"><br>

                        <input type="submit">
                    </form>


                </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <?php if (!empty($_POST)): ?>
                        <p>ID: <?php echo $_POST['IdSelect'] ?></p>
                        <hr>
                        <p>
                            NOM: <?php echo FormaPago::select($_POST['IdSelect'])->getValueEncoded("nombreFormaPago"); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card border-success mb-3">
                <div class="card-header">RESULTAT</div>
                <div class="card-body">


                    <table class="table">
                        <thead>
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $formes = FormaPago::selectAll();
                        foreach ($formes as $value) {
                            foreach ($value as $test) { ?>
                                <tr>
                                    <td>  <?php echo $test->getValueEncoded("idFormaPago"); ?></td>
                                    <td>  <?php echo $test->getValueEncoded("nombreFormaPago"); ?></td>
                                </tr>
                            <?php }

                        } ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


    <hr>
    <div class="row">

        <div class="col-sm-3">
            <div class="card border-warning mb-3" style="max-width: 20rem;">
                <div class="card-header">DESCRIPCIONES(Multiidioma)</div>
                <div class="card-body">
                    <form class="form" action="CRUD.php" method="post">
                        <p>ID Idioma:</p>
                        <select name="IdIdiomaDesc" class="form-control">

                            <?php $formes = Idioma::selectAll();
                            foreach ($formes as $value) {
                                foreach ($value as $test) { ?>


                                    <option value='<?php echo $test->getValueEncoded("idIdioma"); ?>'>
                                        <?php echo $test->getValueEncoded("nombreIdioma"); ?></option>

                                <?php }

                            } ?>


                        </select>

                        <p>ID Tipo Pago:</p>
                        <select name="IdPagoDesc" class="form-control">

                            <?php $formes = FormaPago::selectAll();
                            foreach ($formes as $value) {
                                foreach ($value as $test) { ?>


                                    <option value='<?php echo $test->getValueEncoded("idFormaPago"); ?>'>
                                        <?php echo $test->getValueEncoded("nombreFormaPago"); ?></option>

                                <?php }

                            } ?>


                        </select>


                        <p>Descripcion:</p>
                        <textarea rows="5" name="descripcio"></textarea>
                        <button type="submit" name="submit">Insertar descripcion</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border-success mb-3">
                <div class="card-header">RESULTAT</div>
                <div class="card-body">


                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID Tipo Pago</th>
                            <th scope="col">ID Idioma</th>
                            <th scope="col">Descripcio</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $formes = IdiomaFormaPago::selectAll();
                        foreach ($formes as $value) {
                            foreach ($value as $test) { ?>
                                <tr>
                                    <td>  <?php echo $test->getValueEncoded("idFormaPago"); ?></td>
                                    <td>  <?php echo $test->getValueEncoded("iidIdioma"); ?></td>
                                    <td>  <?php echo $test->getValueEncoded("descripcio"); ?></td>
                                </tr>
                            <?php }

                        } ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card border-success mb-3">
                <div class="card-header">IDIOMES</div>
                <div class="card-body">


                    <table class="table">
                        <thead>
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $formes = Idioma::selectAll();
                        foreach ($formes as $value) {
                            foreach ($value as $test) { ?>
                                <tr>
                                    <td>  <?php echo $test->getValueEncoded("idIdioma"); ?></td>
                                    <td>  <?php echo $test->getValueEncoded("nombreIdioma"); ?></td>
                                </tr>
                            <?php }

                        } ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
