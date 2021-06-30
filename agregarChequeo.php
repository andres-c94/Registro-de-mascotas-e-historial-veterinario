<?php

//CONEXION CON BASE DE DATOS
include("conexion.php");

//VARIABLES PARA RECIBIR DATOS

$diagnostico = $_POST['tipo_diagnostico'];
$nombre2 = $_POST['nombre2'];
$veterinario=$_POST['veterinario'];
$cedula =$_POST['cedula'];
$resultado_diagnostico =$_POST['resultadoDiagnostico'];
$fecha =$_POST['fecha'];



//AGREGAR DATOS A LA BASE DE DATOS

$consulta = $pdo->prepare("INSERT INTO chequeoveterinario(diagnostico,nombre_mascota,nombre_veterinario,cedula,resultado,fecha) VALUES(:tipo_diagnostico, :nombre2, :veterinario, :cedula, :resultadoDiagnostico, :fecha)");

$consulta->bindParam(':tipo_diagnostico',$diagnostico);
$consulta->bindParam(':nombre2',$nombre2);
$consulta->bindParam(':veterinario',$veterinario);
$consulta->bindParam(':cedula',$cedula);
$consulta->bindParam(':resultadoDiagnostico',$resultado_diagnostico);
$consulta->bindParam(':fecha',$fecha);


if($consulta->execute()){
    echo"datos guardados";
}else{
    echo"No se guardo";
}


//REDIRECCIONAR A LA PAGINA INDEX
header("location: chequeo.php");

//SECIONES Y ALERTAS
$_SESSION['mensaje'] = 'Registro Agregado';



?>