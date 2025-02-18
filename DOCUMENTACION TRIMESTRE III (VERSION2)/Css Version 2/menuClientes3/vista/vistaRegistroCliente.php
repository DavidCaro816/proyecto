<?php

require('../modelo/conexion.php');
$conexion= mysqli_connect("localhost", "root", "", "perez_lara_cia_ltda");
$conexion->query("SET NAMES 'utf8'");
$consultaTipoDoc = mysqli_query($conexion,"SELECT * FROM tipodocumento");
$consultaDepartamentos = mysqli_query($conexion,"SELECT * FROM departamento");
$consultaCiudad = mysqli_query($conexion,"SELECT * FROM ciudad");
$consultaTipoCliente = mysqli_query($conexion,"SELECT * FROM tipocliente");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO CLIENTE</title>
    <link rel="stylesheet" href="estilosRegistro.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
</head>
<body>

<div class="navbar">
    <div class="navbar_group">
        <div class="navbar_header">
            <div class="logo">
                <img src="icons/logo.svg" alt="">
            </div>
        </div>
        <div class="navbar_body">
            <div class="home">
                <img src="icons/home.svg" alt="">
            </div>
            <div class="clients">
                <a href="indexMenuClientes.php">
                    <img src="icons/clients.svg" alt="">
                </a>
            </div>
            <div class="quotes">
                <img src="icons/quotes.svg" alt="">
            </div>
            <div class="policies">
                <img src="icons/policies.svg" alt="">
            </div>
            <div class="sinister">
                <a href="siniestros.php">
                    <img src="icons/sinister.svg" alt="">
                </a>
            </div>
            <div class="reports">
                <img src="icons/reports.svg" alt="">
            </div>
        </div>
    </div>
    <div class="navbar_footer">
        <div id="settings" class="settings">
            <img src="icons/settings.svg" alt="">
        </div>
        <div id="signout" class="sign_out">
            <img src="icons/sign_out.svg" alt="">
        </div>
    </div>
</div>

<a HREF=""><img id="campana"src="imagenes/campana.png"></a>
<a HREF=""><img id="logo" src="imagenes/logo.png"></a>

<div class="contenedorAtras"></div>
<div class="contenedorPadre">
    <form class="formularioRegistro" action="../controlador/insertar.php" method="POST">
        <div class="titulo">
            <a>Nuevo Cliente</a>
        </div>
        <div class="campoPrimerNombre">
            <input type="text" name="primerNombre" placeholder="Primer nombre(*)" required>
        </div>

        <div class="campoSegundoNombre">
            <input type="text" name="segundoNombre" placeholder="Segundo nombre">
        </div>

        <div class="campoPrimerApellido">
            <input type="text" name="primerApellido" placeholder="Primer apellido(*)" required>
        </div>

        <div class="campoSegundoApellido">
            <input type="text" name="segundoApellido" placeholder="Segundo apellido" >
        </div>

        <div class="campoTipoDocumento">
            <select name="tipoDocumento" id="tipoDoc" required>
                <?php
                while($datosDocumentos = mysqli_fetch_array($consultaTipoDoc)){
                    ?>
                    <option value="<?php echo $datosDocumentos['idTipoDocumento']?>"> <?php echo $datosDocumentos['descripcionDocumento']; ?> </option>
                    <?php
                }
                ?>

                <option hidden selected>Tipo de documento</option>
            </select>
        </div>

        <div class="campoNumeroDocumento">
            <input type="text" name="numeroDocumento" placeholder="No. Documento(*)" required>
        </div>

        <div class="campoFechaNacimiento">
            <input type="date" name="fechaNacimiento" required>
        </div>

        <div class="campoDepartamento">
            <select name="departamento" id="departamentos" required>
                <?php
                while($datosDepartamentos = mysqli_fetch_array($consultaDepartamentos)){
                    ?>
                    <option value="<?php echo $datosDepartamentos['idDepartamento']?>"><?php echo $datosDepartamentos['Departamento']?></option>
                    <?php
                }
                ?>
                <option hidden selected>Departamento</option>
            </select>
        </div>

        <div class="campoCiudad">
            <select name="ciudad" id="ciudades" required>
                <?php
                while($datosCiudad = mysqli_fetch_array($consultaCiudad)){
                    ?>
                    <option value="<?php echo $datosCiudad['idCiudad']?>"><?php echo $datosCiudad['ciudad']?></option>
                    <?php
                }
                ?>
                <option hidden selected>Ciudad</option>
            </select>
        </div>

        <div class="campoDireccion">
            <input type="text" name="direccion" placeholder="Dirección hogar" required>
        </div>
        <div class="campoDireccionTrabajo">
            <input type="text" name="direccionTrabajo" placeholder="Dirección trabajo" >
        </div>

        <div class="campoEmail">
            <input type="email" name="correoElectronico" placeholder="Correo electrónico(*)" required>
        </div>


        <div class="campoNumeroTelefono">
            <input type="text" name="numeroTelefono" placeholder="No. Teléfono(*)" required>
        </div>
        <div class="campoNumeroTelefono2">
            <input type="text" name="numeroTelefono2" placeholder="No. Teléfono 2">
        </div>

        <div class="campoTipoCliente">
            <select name="tipoCliente" required>
                <?php
                while($datosTipoCliente = mysqli_fetch_array($consultaTipoCliente)){
                    ?>
                    <option value="<?php echo $datosTipoCliente['idTipoCliente'] ?>"><?php echo $datosTipoCliente['tipoCliente'];?></option>
                    <?php
                }
                ?>
                <option hidden selected>Tipo de cliente</option>
            </select>
        </div>

        <div class="botonGuardar">
            <input type="submit" name="botonGuardado" value="Guardar">
        </div>

    </form>

</div>
</body>
</html>


