<?php 

include("conexion.php");

//Recibiendo variable id para modificar
$id = $_GET['id'];

//Recibiendo todos los datos de la tabla para poder modificarlos por su id
$query = "SELECT * FROM chequeoveterinario WHERE id = $id ";
$resultado = $pdo->query($query);

//guardando datos en la variable row
$row = $resultado->fetch();


//guardando datos de la tabla en variables 
$diagnostico = $row['diagnostico'];
$nombre2 = $row['nombre_mascota'];
$veterinario = $row['nombre_veterinario'];
$cedula = $row['cedula'];
$resultado_diagnostico = $row['resultado'];
$fecha = $row['fecha'];


if(isset($_POST['update'])){
    $id = $_GET['id'];
    $diagnostico =$_POST['diagnostico'];
    $nombre2=$_POST['nombre_mascota'];
    $veterinario=$_POST['nombre_veterinario'];
    $cedula=$_POST['cedula'];
    $resultado_diagnostico=$_POST['resultado'];
    $fecha=$_POST['fecha'];

    //ACTUALIZANDO DATOS
    $query = "UPDATE chequeoveterinario set diagnostico = '$diagnostico', nombre_mascota = '$nombre2', nombre_veterinario='$veterinario', cedula='$$cedula', resultado='$resultado_diagnostico', fecha='$fecha' WHERE id = $id ";

    $resultado = $pdo->query($query);
    header("Location: tablaHistorialVeterinario.php");
}

?>

<?php include("includes/head.php"); ?>

<div class="container-fluid">

<h3 style="margin-top:20px;">Modificar Historial:</h3>
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card card-body">
                <form action="modificarHistorialVeterinario.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <label class="form-label">Tipo de diagnostico:</label>
                    <input class="form-control" type="text" name="diagnostico" value="<?php echo $diagnostico ?>">

                    <label class="form-label">Nombre mascota:</label>
                    <input class="form-control" type="text" name="nombre_mascota" value="<?php echo $nombre2 ?>">

                    <label class="form-label">Nombre veterinario:</label>
                    <input class="form-control" type="text" name="nombre_veterinario" value="<?php echo $veterinario ?>">

                    <label class="form-label">Cedula:</label>
                    <input class="form-control" type="number" name="cedula" value="<?php echo $cedula ?>">

                    <label class="form-label">Resultado:</label>
                    <input class="form-control" type="text" name="resultado" value="<?php echo $resultado_diagnostico ?>">

                    <label class="form-label">Fecha:</label>
                    <input class="form-control" type="text" name="fecha" value="<?php echo $fecha ?>">

                    <button class="btn btn-success" name="update">Enviar</button>
                </form>
            </div>
        </div>
    </div>

</div>