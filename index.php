<?php
include("conexion.php");
include("includes/head.php");
?>

<div class="titulo">
    <h3>Registro de Adopciones:</h3>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <br><br>
            <form action="agregarAdopcion.php" name="registroAdopcion" method="POST">

                <label class="form-label" for="cedula">Cedula adoptante</label>
                <input class="form-control" type="number" name="cedula">

                <label class="form-label" for="nombre">Nombre adoptante</label>
                <input class="form-control" type="text" name="nombre">

                <label class="form-label" for="direccion">Direccion</label>
                <input class="form-control" type="text" name="direccion">

                <label class="form-label" for="telefono">Telefono</label>
                <input class="form-control" type="number" name="telefono">

                <label class="form-label" for="mascota">Nombre mascota adoptada</label>
                <input class="form-control" type="text" name="mascota">

                <label class="form-label" for="fecha">Fecha Adopcion</label>
                <input class="form-control" type="date" name="fecha">

                <input class="btn btn-primary" type="submit" value="Registrar Adopcion">

            </form>

        </div>

        <div class="col-6">
        <img src="media/adopcion.jpg" alt="logo POCY" height="280px" width="400px">
            <br><br>
        <?php

            if (isset($_SESSION['mensaje'])) { ?>


                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Registro agregado con exito!</h4>


                </div>

            <?php

                session_unset();
            } ?>

        </div>





    </div>
</div>

