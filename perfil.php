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
 
            <h1 class="cover-heading">Hola <?php echo $_SESSION['nick']; ?></h1>
         <p class="lead">Posees <?php echo $puntos_bd;  ?> puntos en tu cuenta!</p>
       
      </main>
  <?php
require('footer.php');
require('js.php');
?>
  </body>
</html>
