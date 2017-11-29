<?php
include_once ("header.php");
include_once ("navbar.php");
$_SESSION['pagActual'] =1;
include_once ("sidebar.php");
?>

          <main role="main" class="col-sm-9 ml-sm-auto col-md-10">
              <?php  include_once "breadcrumb.php" ;
             include_once "contenido-idioma.php" ?>
          </main>
        </div>
      </div>

<?php
include_once "footer.php";
 ?>