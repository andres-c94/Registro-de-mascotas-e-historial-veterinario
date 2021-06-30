<?php

//CONEXION CON BASE DE DATOS
require_once "conexion.php";



//variables para recibir los datos

$cedula=$_POST['cedula'];
$nombreA=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$nombreM=$_POST['mascota'];
$fecha=$_POST['fecha'];

//Registrar en base de datos

$consulta = $pdo->prepare("INSERT INTO registroadopcion(cedula,nombre_adoptante,direccion,telefono,nombre_de_mascota_adoptada,	fecha_adopcion) VALUES(:cedula,:nombre,:direccion,:telefono,:mascota,:fecha)");

$consulta->bindParam(':cedula',$cedula);
$consulta->bindParam(':nombre',$nombreA);
$consulta->bindParam(':direccion',$direccion);
$consulta->bindParam(':telefono',$telefono);
$consulta->bindParam(':mascota',$nombreM);
$consulta->bindParam(':fecha',$fecha);

//Ejecutar consulta

if($consulta->execute()){
    echo "Datos guardados";
}else{
    echo "DATOS NO GUARDADOS";
}



//REDIRECCIONAR A LA PAGINA INDEX
header("location: index.php");

//SECIONES Y ALERTAS
$_SESSION['mensaje'] = 'Registro Agregado';






?>
