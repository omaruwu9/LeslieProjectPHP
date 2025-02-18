<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'BaseDatos/db.php'; // Conexión a la base de datos

session_start([
    'cookie_lifetime' => 86400, // 1 día de sesión activa
    'use_strict_mode' => true,  // Evita reutilización de sesiones
]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nomina = trim($_POST['nomina']);
    $password = trim($_POST['password']);

    // Destruir cualquier sesión previa y crear una nueva
    session_unset();
    session_destroy();
    session_start();

    // Consulta segura
    $sql = "SELECT nomina, password, id_rol FROM usuario WHERE nomina = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error en la consulta SQL: ' . $conn->error);
    }

    $stmt->bind_param("s", $nomina);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Vincular los resultados
        $stmt->bind_result($db_nomina, $db_password, $id_rol);
        $stmt->fetch();

        // Verificar si las contraseñas están cifradas
        if ($password == $db_password) {
            session_regenerate_id(true);

            // Guardar datos en la sesión
            $_SESSION['nomina'] = $db_nomina;
            $_SESSION['id_rol'] = $id_rol;

            // Redirigir según el rol
            if ($id_rol == 1) {
                header("Location: Administrador/adm_home.php");
            } elseif ($id_rol == 2) {
                header("Location: Usuario/user_home.php");
            }
            exit();
        } else {
            echo "<script type='text/javascript'>alert('Contraseña incorrecta'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('Usuario incorrecto'); window.location.href='index.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
