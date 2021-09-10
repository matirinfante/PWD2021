<?php
include_once "structure/Header.php"; ?>
    <div class="container align-content-center p-3">
        <div class="row pb-2">
            <h3 class="h3">Ejercicio 7</h3>
        </div>
        <div class="row d-flex align-content-end flex-wrap">
            <form id="formulario5" name="formulario5" method="get" action="Ej7-res.php" onsubmit="return validar();"
                  novalidate>
                <div class="form-group p-2">
                    <label for="A">A</label>
                    <input class="form-control" name="A" id="A" type="number" required>
                </div>
                <div class="form-group p-2">
                    <label for="B">B</label>
                    <input class="form-control" name="B" id="B" type="number" required>
                </div>
                <div class="form-group p-2">
                    <label for="Operacion">Operacion</label>
                    <select class="form-select" id="Operacion" name="Operacion" required>
                        <option value="" selected hidden disabled>Elegir</option>
                        <option value="+">SUMA</option>
                        <option value="-">RESTA</option>
                        <option value="*">MULTIPLICACION</option>
                        <option value="/">DIVISION</option>
                    </select>
                </div>
                <button class="btn btn-primary bg-dark" type="submit">Calcular</button>
            </form>
        </div>
    </div>
    <script src="js/validacionFormTP2Ej7.js" type="application/javascript"></script>
<?php
include_once "structure/Footer.php"; ?>