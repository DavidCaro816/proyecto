<?php
require_once "template/plantilla.php";
require_once "template/plantilla_encabezado_contenido.php";
require_once "template/plantilla_contenido.php";
require_once '../Controlador/poliza_controller.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../icons/window/icono.svg">
    <link rel="stylesheet" href="../css/template/estilos_plantilla.css">
    <link rel="stylesheet" href="../css/template/estilos_plantilla_encabezado_contenido.css">
    <link rel="stylesheet" href="../css/template/estilos_plantilla_contenido.css">
    <link rel="stylesheet" href="../css/estilos_polizas.css">
    <title>Pólizas</title>
</head>
<body>
    <div class="container">
        <?php template();?>
        <main>
            <?php
                header_content_template('Pólizas',0);
                content_template(2,['Valor asegurado','Valor prima'],false,index());
            ?>
        </main>
    </div>
    <script src="../js/new_modal.js"></script>
    <script src="../js/sidebar.js"></script>
    <script src="../js/modal.js"></script>
</body>
</html>