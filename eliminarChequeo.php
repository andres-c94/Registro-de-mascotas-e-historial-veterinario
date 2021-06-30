<?php
include("conexion.php");

$id=$_GET['id'];
$borrar = $pdo->prepare("DELETE FROM chequeoveterinario WHERE id = :id ");



$borrar->bindParam(":id", $id);

if ($borrar->execute()){
    echo "Registro Borrado con exito!!!";
  } else {
    echo "Error al borrar registro...!!";
  }

 header("location: tablaHistorialVeterinario.php");
?>