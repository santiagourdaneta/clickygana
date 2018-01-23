<?php

require('conexion.php');

if(isset($_POST["submit"])){
 

$usuario = $_POST['nick'];    
$clave = $_POST['clave'];
$clave = sha1( $_POST['clave']); 
 
$sthandler = $dbh->prepare("SELECT * FROM usuarios WHERE nick = :nick AND clave = :clave");
$sthandler->bindParam(':nick', $usuario);
$sthandler->bindParam(':clave', $clave);
$sthandler->execute();

if($sthandler->rowCount() >= 1){
session_start();
$_SESSION['nick'] = $usuario;

 $url = "jugar.php";
echo "<script>window.open('".$url."','_self');</script>";
    
	 
  
} else {

 
 $url = "login.php?error";
echo "<script>window.open('".$url."','_self');</script>";
    
  
 
    }
 
$dbh = null;
}


 

 ?>
