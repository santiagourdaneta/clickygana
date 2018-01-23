<?php

require('conexion.php');
 
if(isset($_POST["submit"])){


$usuario = $_POST['nick'];    
$clave = $_POST['clave'];


$sthandler = $dbh->prepare("SELECT nick FROM usuarios WHERE nick = :nick");
$sthandler->bindParam(':nick', $usuario);
$sthandler->execute();

if($sthandler->rowCount() > 0){

    $url = "registro.php?error";
echo "<script>window.open('".$url."','_self');</script>";
    
   
  
} else {

  
    $sql = 'INSERT INTO usuarios (nick, clave) VALUES (:nick,:clave)';    
    $query = $dbh->prepare($sql);

    $query->execute(array(

    ':nick' => $usuario,
    ':clave' => sha1($clave)
));

  $url = " login.php?exito";
echo "<script>window.open('".$url."','_self');</script>";
     
    }
$dbh = null;
} 





 

 ?>
