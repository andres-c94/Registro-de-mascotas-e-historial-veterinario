<?php
include("conexion.php");
include("includes/head.php");
?>

<div class="titulo">
    <h3>Nuevo Chequeo Veterinario:</h3>
</div>
<hr>
<div class="container-fluid">

    <div class="row">
        <div class="col-6">

            <form name="regitromedico" action="agregarChequeo.php" method="POST">

                <label class="form-label" for="tipo_diagnostico">Tipo de diagnostico:</label>
                <select class="form-control" name="tipo_diagnostico">
                    <option value="Esterilizacion">Esterilizacion</option>
                    <option value="Chequeo">Chequeo</option>
                    <option value="Desaparazitacion">Desaparazitacion</option>
                    <option value="Higiene">Higiene</option>
                    <option value="Operacion">Operacion</option>
                    <option value="Seguimiento">Seguimiento</option>
                    <option value="Vacunacion">Vacunacion</option>
                </select>

                <label class="form-label" for="nombre2">Nombre de la mascota:</label>
                <input class="form-control" type="text" name="nombre2" required>

                <label class="form-label" for="veterinario">Veterinario encargado:</label>
                <input class="form-control" type="text" name="veterinario" required>

                <label class="form-label" for="cedula">Cedula encargado:</label>
                <input class="form-control" type="number" name="cedula">

                <div class="form-group">
                    <label class="form-label" for="resultadoDiagnostico">Resultado diagnostico:</label>
                    <textarea class="form-control" rows="2" cols="8" id="resultadoDiagnostico" name="resultadoDiagnostico" required></textarea>
                </div>

                <label class="form-label" for="fecha">Fecha de diagnostico:</label>
                <input class="form-control" type="date" name="fecha" required>

                <input class="btn btn-primary" type="submit" value="Registrar">

            </form>
        </div>

        <div class="col-6">
            <img src="media/POSYG.png" alt="logo POCY" height="280px" width="400px">
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



</body>

</body>

</html>