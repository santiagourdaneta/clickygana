<!doctype html>
<html lang="en">
<?php
require('head.php');
require('navbar.php');
?>
      <?php if(isset($_GET['error'])){echo "<script type= 'text/javascript'>alert('Debe elegir otro nick!');</script>";} ?>
  <h1 class="cover-heading">Registro</h1>
    <br>
<form action="codigo_registro.php" method="post">
<label>Nick :</label>
<input type="text" name="nick" id="nick" required="required" placeholder="Nick"/>
<label>Clave :</label>
<input type="password" name="clave" id="clave" required="required" placeholder="Clave"/> 
<input type="submit" value="Aceptar" name="submit"/><br />
</form>
 <?php
require('footer.php');
require('js.php');
?>
  </body>
</html>
