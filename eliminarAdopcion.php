<?php
include("conexion.php");

$id=$_GET['id'];
$borrado = $pdo->prepare("DELETE FROM registroadopcion WHERE id = :id ");

$borrado->bindParam(":id", $id);

if ($borrado->execute()){
    echo "Registro Borrado con exito!!!";
  } else {
    echo "Error al borrar registro...!!";
  }

 header("location: tablaAdopciones.php");

?>