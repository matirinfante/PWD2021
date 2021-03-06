<?php
include_once("../structure/Header.php");
?>

    <div class="container px-5 my-5 mb-5">
        <div class="text-center p-3">
            <h3>Alta Auto</h3>
        </div>
        <form id="formPersona" name="formPersona" method="post" action="action/nuevoAutoAction.php"
              onsubmit="return validarAuto();" novalidate>
            <div class="form-floating mb-3">
                <input class="form-control" id="patente" name="patente" type="text" placeholder="Patente" required>
                <label for="patente">Patente</label>
                <div class="invalid-feedback">Ingrese una patente válida.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="marca" name="marca" type="text" placeholder="Marca" required>
                <label for="marca">Marca</label>
                <div class="invalid-feedback">Ingrese una marca.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="modelo" name="modelo" type="text" placeholder="Modelo" required>
                <label for="modelo">Modelo</label>
                <div class="invalid-feedback">Ingrese un modelo.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="dni" name="dni" type="text" placeholder="DNI" required>
                <label for="dni">DNI</label>
                <div class="invalid-feedback">Ingrese DNI sin puntos.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Apellido" required>
                <label for="apellido">Apellido</label>
                <div class="invalid-feedback">Ingrese un apellido válido.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required>
                <label for="nombre">Nombre</label>
                <div class="invalid-feedback">Ingrese un nombre válido</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="fechaDeNacimiento" name="fechaDeNacimiento" type="date"
                       placeholder="Fecha de nacimiento" required>
                <label for="fechaDeNacimiento">Fecha de nacimiento</label>
                <div class="invalid-feedback">Se requiere que ingrese una fecha de nacimiento válida</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Teléfono" required>
                <label for="telefono">Teléfono</label>
                <div class="invalid-feedback">Ingrese un teléfono válido</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="domicilio" name="domicilio" type="text" placeholder="Domicilio"
                       required>
                <label for="domicilio">Domicilio</label>
                <div class="invalid-feedback">Ingrese un domicilio válido</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Enviar</button>
            </div>
        </form>
    </div>

    <script rel="script" src="js/validaciones.js"></script>

<?php
include_once("../structure/Footer.php");
?>
