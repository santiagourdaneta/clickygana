<?php

require('permiso.php');
require('conexion.php');
 
session_start();
$usuario = $_SESSION['nick'];
 
$sthandler = $dbh->prepare("SELECT puntos FROM usuarios WHERE nick = :nick");
$sthandler->bindParam(':nick', $usuario);
$sthandler->execute();

 $prekes = $sthandler->fetchAll(PDO::FETCH_ASSOC);

     foreach ($prekes as $preke) {
         $puntos_bd = $preke['puntos'];
     }
     
$dbh = null;
?>
<!doctype html>
<html lang="en">
<?php
require('head.php');
require('navbar2.php');
?>
      <main role="main" class="inner cover">

       <?php 
if($puntos_bd<=0){
        ?>
         <p class="lead">Haga click sobre el enlace para empezar a ganar dinero.</p>
       <h1><a  href="sumar_puntos.php">Enlace 1</a></h1>
      </main>
<?php }else{ ?>
  <p class="lead">Vuelva a jugar mas tarde por favor!.</p>
      </main>
      <?php } ?>


<?php
require('footer.php');
require('js.php');
?>
  </body>
</html>
