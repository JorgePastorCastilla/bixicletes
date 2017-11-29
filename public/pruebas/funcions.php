<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 14/11/2017
 * Time: 15:10
 */

 function impimirNavBar($enlaces){
     foreach($enlaces as $link)
      {
           echo "<li class=\"nav-item\">
           <a class=\"nav-link\" href=".$link[1].">$link[0]</a>
       </li>";

     }
 }


function impimirSideBar($enlaces){
      $pagina = $_SESSION['pagActual'];



      foreach ($enlaces[$pagina][2] as $link) {
        echo "<li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">$link</a>
          <a class=\"nav-link\" href=\"#\"></a>
        </li>";
      }


}
