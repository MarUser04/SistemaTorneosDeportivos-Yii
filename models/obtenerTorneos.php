<?php
$conexion= null;
$consulta= null;
//conexión con la base de datos
$conexion= new PDO('mysql:host=localhost; dbname=SistemaTorneos-Deportivos', 'root',''); 
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$consulta= $conexion->prepare("SELECT * FROM torneos");
$consulta->execute();
$filas= $consulta->fetchAll();
$_SESSION['torneos'] = $filas;