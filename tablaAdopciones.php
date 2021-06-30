<?php
include("conexion.php");
include("includes/head.php");
?>

<br>
<h1 style="margin-left:50px">Mascotas adoptadas</h1>
<br>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Cedula</th>
                <th>Nombre adoptante</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Mascota Adoptada</th>
                <th>Fecha adopcion</th>
                <th>control</th>
            </tr>
        <tbody>
                   <!-- CONSULTA SQL PARA MOSTRAR DATOS EN LA TABLA -->

        <?php

        $query = "SELECT * FROM registroadopcion";
        $resultado = $pdo->query($query);

        $resultado->fetch();


        while($row = $resultado->fetch()) { ?>

            <tr>
                <td> <?php echo $row['cedula'] ?> </td>
                <td> <?php echo $row['nombre_adoptante'] ?> </td>
                <td> <?php echo $row['direccion'] ?> </td>
                <td> <?php echo $row['telefono'] ?> </td>
                <td> <?php echo $row['nombre_de_mascota_adoptada'] ?> </td>
                <td> <?php echo $row['fecha_adopcion'] ?> </td>
                <td><a style="background-color: green; padding:2px; margin: 2px; color:white; border-radius:3px; " href="modificarAdopcion.php?id=<?php echo $row['id']?>">Editar</a><a style="background-color: red; padding:2px; margin: 2px; color:white; border-radius:3px;" href="eliminarAdopcion.php?id=<?php echo $row['id']?>">Borrar</a></td>
        <?php } ?>

            </tr>
        </tbody>
        </thead>
    </table>
</div>




</body>

</html>