<?php

include("conexion.php");

//Recibiendo variable id para modificar
$id = $_GET['id'];

//Recibiendo todos los datos de la tabla para poder modificarlos por su id
$query = "SELECT * FROM registroadopcion WHERE id = $id ";
$resultado = $pdo->query($query);

//guardando datos en la variable row
$row = $resultado->fetch();

//guardando datos de la tabla en variables 
$cedula = $row['cedula'];
$nombreA = $row['nombre_adoptante'];
$direccion = $row['direccion'];
$telefono = $row['telefono'];
$nombreM = $row['nombre_de_mascota_adoptada'];
$fecha = $row['fecha_adopcion'];


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $cedula = $_POST['cedula'];
    $nombreA = $_POST['nombre_adoptante'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $nombreM = $_POST['nombre_de_mascota_adoptada'];
    $fecha = $_POST['fecha_adopcion'];


    //Actualizando datos
    $query = "UPDATE registroadopcion set cedula = '$cedula', nombre_adoptante = '$nombreA', direccion='$direccion', telefono='$telefono', nombre_de_mascota_adoptada='$nombreM', fecha_adopcion='$fecha' WHERE id = $id ";

    $resultado = $pdo->query($query);

    //REDIRECCIONAR A LA TABLA
    header("location: tablaAdopciones.php");
}


?>

<?php include("includes/head.php"); ?>

<div class="container-fluid">

    <h3 style="margin-top:20px;">Modificar Adopciones:</h3>
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card card-body">
                <form action="modificarAdopcion.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <label class="form-label">Cedula:</label>
                    <input class="form-control" type="text" name="cedula" value="<?php echo $cedula ?>">

                    <label class="form-label">Nombre:</label>
                    <input class="form-control" type="text" name="nombre_adoptante" value="<?php echo $nombreA ?>">

                    <label class="form-label">Direccion:</label>
                    <input class="form-control" type="text" name="direccion" value="<?php echo $direccion ?>">

                    <label class="form-label">Telefono:</label>
                    <input class="form-control" type="text" name="telefono" value="<?php echo $telefono ?>">

                    <label class="form-label">Nombre de la mascota:</label>
                    <input class="form-control" type="text" name="nombre_de_mascota_adoptada" value="<?php echo $nombreM ?>">

                    <label class="form-label">Fecha:</label>
                    <input class="form-control" type="text" name="fecha_adopcion" value="<?php echo $fecha ?>">

                    <button class="btn btn-success" name="update">Enviar</button>
<br><br>
                    <P style="color: red;">Nota: Cedula imposible de modificar</P>
                </form>
            </div>
        </div>
    </div>

</div>