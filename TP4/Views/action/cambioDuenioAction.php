<?php
include_once("../structure/Header.php");
include_once("../../Controllers/ControllerPersona.php");
include_once("../../Controllers/ControllerAuto.php");


$controller = new ControllerAuto();
$controllerPersona = new ControllerPersona();
$response = false;
$datos = data_submitted();
if (!empty($datos)) {
    if (ControllerPersona::existePersona($datos)) {
        $response = $controller->cambiarDuenio($datos);
    }
}

?>

<div class="container text-center p-5 mt-5">
    <?php
    if ($response) {
        echo "<div class='alert alert-success' role='alert'>¡Cambio existoso!</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>No se ha podido realizar el cambio de dueño.</div>";
    }
    ?>
</div>

<?php
include_once("../structure/Footer.php");
?>


