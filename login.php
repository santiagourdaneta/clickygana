<!doctype html>
<html lang="en">
<?php
require('head.php');
require('navbar.php');
?>
      <?php if(isset($_GET['error'])){echo "<script type= 'text/javascript'>alert('Datos erroneos!');</script>";} ?>
       <?php if(isset($_GET['exito'])){echo "<script type= 'text/javascript'>alert('Se ha registrado con exito!');</script>";} ?>
  <h1 class="cover-heading">Login</h1>
    <br>
<form action="codigo_login.php" method="post">
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
