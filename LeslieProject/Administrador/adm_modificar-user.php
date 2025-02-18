<?php
include '../BaseDatos/db.php';
include '../Administrador/adm_home.php';

$id = $_GET['id'];

// Ejecuta la consulta y verifica si devuelve un registro
$sql = "SELECT * FROM Usuario WHERE id_usuario = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!$row) {
    echo "<p>No se encontró el usuario con ID: $id</p>";
    exit; // Detenemos el script si no se encontró el usuario
}
?>
<!DOCTYPE html>
<html lang="es" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGRPMX - Promex Logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!--Modificación de usuarios -->
<div class="hero container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 container justify-content-center card">
                <h1 class="text-center">Edición de Usuario</h1>
                <div class="card-body">
                    <form action="../BaseDatos/update_user.php" method="POST">
                        <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']; ?>">

                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" name="nombre" value="<?php echo $row['nombre'] ?? ''; ?>" required><br>
                        </div>

                        <div class="form-group">
                            <label>Apellido:</label>
                            <input type="text" name="apellido" value="<?php echo $row['apellido'] ?? ''; ?>" required><br>
                        </div>

                        <div class="form-group">
                            <label>No. Nomina:</label>
                            <input type="number" name="nomina" value="<?php echo $row['nomina'] ?? ''; ?>" required><br>
                        </div>

                        <div class="form-group">
                            <label>Correo:</label>
                            <input type="email" name="email" value="<?php echo $row['email'] ?? ''; ?>" required><br>
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input type="Password" name="password" value="<?php echo $row['password'] ?? ''; ?>" required><br>
                        </div>

                        <div class="form-group">
                            <label>Rol:</label>
                            <select name="rol" required>
                                <option value="1" <?php if ($row['id_rol'] == '1') echo 'selected'; ?>>Administrador</option>
                                <option value="2" <?php if ($row['id_rol'] == '2') echo 'selected'; ?>>Usuario</option>
                            </select><br>
                        </div>

                        <div class="row">
                            <input type="submit" value="Actualizar Usuario">
                        </div>
                    </form>
                </div>
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