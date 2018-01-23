<?php

$hostname='localhost';
$username='santiago_adminn';
$password='aoV9D31hx1';


 
 
try {

$dbh = new PDO("mysql:host=$hostname;dbname=santiago_clickygana",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

}catch(PDOException $e)
{
echo $e->getMessage();
}

?> 
