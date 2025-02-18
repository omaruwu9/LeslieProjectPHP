<?php
include 'head.php';

include '../BaseDatos/insert_user.php'; // Aquí se incluirá el archivo de inserción en la base de datos


$registro_exitoso = false; // Variable de control para saber si la inserción fue exitosa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí puedes capturar y validar los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nomina =$_POST['nomina'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    // Inserta el usuario en la base de datos
    $registro_exitoso = insertar_usuario($nombre, $apellido, $nomina, $email, $password, $rol);
} else {
}
?>

<!DOCTYPE html>
<html lang="es" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGRPMX - Promex Logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
        <?php if ($registro_exitoso): ?>
        alert("¡Registro exitoso!");
        <?php endif; ?>
    </script>
</head>
<body>
<!-- Parte del registro -->
<div class="hero main-content">
    <div class="container">
        <div class="moduls-container col-md-6 text-center text-md-start align-items-center">
            <h1>Registro de Usuarios</h1>
            <p>Para realizar el registro de un nuevo usuario, realiza la captura de la siguiente información
                solicitada.</p>
            <div class="module-grid">
                <form action="adm_alta-user.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Ingresa tu nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="apellido">Ingresa apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>

                    <div class="form-group">
                        <label for="nomina">Ingresa nomina:</label>
                        <input type="text" class="form-control" id="nomina" name="nomina" required>
                    </div>


                    <div class="form-group">
                        <label for="email">Ingresa correo:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Ingresa contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="rol">Selecciona tipo de usuario:</label>
                        <select class="form-control" id="rol" name="rol" required>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>

                    <div class="row">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Se hace la inserción-->
<footer class="footer">
    &copy; Copyright 2025 Promex Logistics S. de R.L. de C.V. Derechos reservados.
</footer>

</body>
</html>