<?php
require_once "conexion.php";
include("includes/head.php");
?>

<br>
<h1 style="margin-left:50px">Historial Veterinario</h1>
<br>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Tipo diagnostico</th>
                <th>Nombre Mascota</th>
                <th>Veterinario encargado</th>
                <th>Cedula encargado</th>
                <th>Resultado diagnostico</th>
                <th>Fecha diagnostico</th>
                <th>control</th>
            </tr>
        <tbody>
                   <!-- CONSULTA SQL PARA MOSTRAR DATOS EN LA TABLA -->

        <?php
        $query = "SELECT * FROM chequeoveterinario";
        $resultado = $pdo->query($query);
        $resultado->fetch();
        while($row = $resultado->fetch()) { ?>

            <tr>
                <td> <?php echo $row['diagnostico'] ?> </td>
                <td> <?php echo $row['nombre_mascota'] ?> </td>
                <td> <?php echo $row['nombre_veterinario'] ?> </td>
                <td> <?php echo $row['cedula'] ?> </td>
                <td> <?php echo $row['resultado'] ?> </td>
                <td> <?php echo $row['fecha'] ?> </td>
                <td><a style="background-color: green; padding:2px; margin: 2px; color:white; border-radius:3px; " href="modificarHistorialVeterinario.php?id=<?php echo $row['id']?>">Editar</a><a style="background-color: red; padding:2px; margin: 2px; color:white; border-radius:3px;" href="eliminarChequeo.php?id=<?php echo $row['id']?>">Borrar</a></td>
        <?php } ?>

            </tr>
        </tbody>
        </thead>
    </table>
</div>





</body>

</html>