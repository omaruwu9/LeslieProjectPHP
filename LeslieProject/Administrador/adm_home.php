<?php
    include 'head.php';
include '../BaseDatos/db.php';
session_start();

// Verifica si el usuario está autenticado (por correo, por ejemplo)
if (!isset($_SESSION['nomina'])) {
    header("Location: login.php"); // Redirige al login si no hay sesión activa
    exit();
}

$nomina = $_SESSION['nomina']; // Suponemos que el email del usuario está almacenado en la sesión.

try {
    // Consulta para obtener el id_scort basado en el email
    $queryIdUsuario = "SELECT id_usuario FROM usuario WHERE nomina = ?";
    $stmtIdUsuario = $conn->prepare($queryIdUsuario);
    $stmtIdUsuario->bind_param("s", $nomina);
    $stmtIdUsuario->execute();
    $resultIdUsuario = $stmtIdUsuario->get_result();
    $usuarioData = $resultIdUsuario->fetch_assoc();

    if (!$usuarioData) {
        echo "Error: Usuario no encontrado.";
        exit();
    }

    // Guarda el id_scort en la variable
    $userId = $usuarioData['id_usuario'];

    // Consulta para obtener los datos del perfil del usuario
    $queryProfile = "SELECT nombre, foto FROM usuario WHERE id_usuario = ?";
    $stmtProfile = $conn->prepare($queryProfile);
    $stmtProfile->bind_param("i", $userId);
    $stmtProfile->execute();
    $resultProfile = $stmtProfile->get_result();
    $user = $resultProfile->fetch_assoc();

    // Manejo de casos donde no se encuentra el perfil
    if (!$user) {
        echo "Error: Datos de perfil no encontrados.";
        exit();
    }
} catch (Exception $e) {
    echo "Error en la consulta: " . $e->getMessage();
    exit();
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
<!-- Modulos -->
<div class="hero main-content">
    <div class="container">
        <div class="moduls-container col-md-12 text-center text-md-start mb-12 align-items-center">
            <center><h1>¡Bienvenido, Administrador!</h1></center>
            <div class="module-grid">
                <div class="profile-container">
                    <center>
                        <img src="<?php
                        echo isset($user['foto']) && !empty($user['foto'])
                            ? '../static/images/' . htmlspecialchars($user['foto'])
                            : '../static/images/foto_default/Default-Profile.png';
                        ?>"
                             alt="Foto de perfil"
                             class="profile-image"
                             width="150px">
                    </center>


                    <h2 class="profile-name">
                        <center>
                            <?php
                            echo htmlspecialchars($user['nombre']);
                            ?>
                        </center>

                    </h2>
                </div>

                <div class="module">
                    <img src="../static/images/view_admin/lista-user-icon.png" alt="Modulo de Usuarios">
                    <h4>Usuarios</h4>
                    <p>Visualización de los usuarios del sistema.</p>
                    <a href="adm_list-user.php" class="btn btn-primary">Ver Usuarios</a>
                </div>

<!--                <div class="module">-->
<!--                    <img src="..//static/images/view_admin/modify-user-icon.png" alt="Módulo de Modificaciones">-->
<!--                    <h4>Modificaciones</h4>-->
<!--                    <p>Modifica los datos de un usuario.</p>-->
<!--                    <a href="../BaseDatos/edit_user.php" class="btn btn-primary">Modificar</a>-->
<!--                </div>-->

                <div class="module">
                    <img src="..//static/images/view_admin/add-user-icon.png" alt="Módulo Añadir Usuario">
                    <h4>Añadir Usuario</h4>
                    <p>Añade nuevos usuarios al sistema.</p>
                    <a href="adm_alta-user.php" class="btn btn-primary">Añadir</a>
                </div>
                <!-- Agregar más módulos según sea necesario -->
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