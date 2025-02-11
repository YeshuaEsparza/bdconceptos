<?php
//Revisión de Usuarios, si no esta logeado, no podrá operar en la aplicación.
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/estilos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceptos de RIAN Soluciones</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-xl navbar-light" style="background-color:rgb(197, 204, 216);">
        <div class="container-fluid text-black-50">
            <a class="navbar-brand color-primary m-4"> RIAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLight" aria-controls="navbarLight" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarLight">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/bdconceptos/view/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Detalle de Materiales</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Detalle de Manos de Obra</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="" href="http://localhost/bdconceptos/controller/cerrar_sesion.php">Cerrar sesión</a>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    </header>
</body>
</html>