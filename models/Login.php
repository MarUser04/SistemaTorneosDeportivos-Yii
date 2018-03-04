<?php
use app\controllers\SiteController;
session_start();
$username=  $_POST["user"];
$password= $_POST["password"];
$admin;
$conexion= null;
$consulta= null;
//conexión con la base de datos
$conexion= new PDO('mysql:host=localhost; dbname=SistemaTorneos-Deportivos', 'root',''); 
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta= $conexion->prepare("SELECT id_equipo, user_equipo, password_equipo, admin FROM equipos WHERE user_equipo= :username AND password_equipo= :pass");
$consulta->execute([
		'username'=> $username,
		'pass'=> $password,
		
	]);
$filas= $consulta->fetchAll();
print_r($filas);
$id=$filas[0][0];
$_SESSION['id'] = $id;
//$_SESSION['id-u']= $filas[0][0];
if($filas && $filas[0][3] == 0)
	header('location:../views/site/RegularUser.php?');
	//return redirect('?r=registros/index');
else if($filas && $filas[0][3] == 1)
	header('location:../web/index.php?r=site');
	//return SiteController::redirect('?r=site');
$filas= null;
$conexion=null;
$consulta=null;
?>