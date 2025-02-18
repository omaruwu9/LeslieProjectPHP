<?php
include 'db.php';
include '../Administrador/head_special.php';
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="/Administrador/style-views.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #ff5722;
        }

        .navbar a {
            color: white;
            font-weight: bold;
        }


        .moduls-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            align-items: center;
        }
        .form-container {
            width: 100%;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
            text-align: left;
            display: block;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .form-group select {
            width: 100%;
            padding: 12px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        /* Botón de envío */
        input[type="submit"] {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #e64a19;
        }

        /* Efecto hover para las cajas de entrada */
        .form-control:hover {
            background-color: #e8e8e8;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            .form-control {
                font-size: 14px;
            }
            input[type="submit"] {
                font-size: 16px;
            }
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="main-content">
    <div class="container">
        <h2><center>Editar Usuario</center></h2>
        <form action="update_user.php" method="POST">
            <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']; ?>">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $row['nombre'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="form-control" value="<?php echo $row['apellido'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="nomina">No. Nomina:</label>
                <input type="text" id="nomina" name="nomina" class="form-control" value="<?php echo $row['nomina'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $row['email'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" value="<?php echo $row['password'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="id_rol">Rol:</label>
                <select id="id_rol" name="id_rol" class="form-control" required>
                    <option value="1" <?php if ($row['id_rol'] == '1') echo 'selected'; ?>>Administrador</option>
                    <option value="2" <?php if ($row['id_rol'] == '2') echo 'selected'; ?>>Usuario</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Actualizar Usuario">
            </div>
        </form>
    </div>
</div>
</div>
<!-- Se hace la inserción-->
<footer class="footer">
    &copy; Copyright 2025 Promex Logistics S. de R.L. de C.V. Derechos reservados.
</footer>
</body>
</html>
