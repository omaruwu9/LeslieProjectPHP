<?php
include 'head.php';
include '../BaseDatos/db.php';
session_start();

// Verifica si el usuario está autenticado (por nomina)
if (!isset($_SESSION['nomina'])) {
    header("Location: login.php"); // Redirige al login si no hay sesión activa
    exit();
}

$nomina = $_SESSION['nomina']; // nomina del usuario autenticado
$errorMessage = '';
$successMessage = '';

// Obtener información actual del usuario
try {
    $query = "SELECT id_usuario, nombre, apellido, email, password, foto FROM usuario WHERE nomina = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $nomina);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        echo "Error: Usuario no encontrado.";
        exit();
    }

    $userId = $user['id_usuario']; // Obtenemos el ID del usuario para procesar la imagen
} catch (Exception $e) {
    echo "Error al obtener datos: " . $e->getMessage();
    exit();
}

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $foto = $user['foto']; // Imagen actual por defecto

    // Manejar la imagen
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $imageName = $userId . "_" . basename($_FILES['foto']['name']);
        $targetDir = "/static/images/foto_default/";
        $targetFile = $targetDir . $imageName;

        // Validar el archivo de imagen
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png'];
        if (in_array($imageFileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                $imagen = "users/" . $imageName; // Ruta relativa para guardar en la base de datos
            } else {
                $errorMessage = "Error al subir la imagen.";
            }
        } else {
            $errorMessage = "Formato de imagen no permitido. Usa JPG, JPEG o PNG.";
        }
    }

    // Actualizar la información del usuario
    if (empty($errorMessage)) {
        try {
            $updateQuery = "UPDATE usuario SET nombre = ?, apellidos = ?, email = ?, foto = ?, password = ? WHERE nomina = ?";
            $stmtUpdate = $conn->prepare($updateQuery);
            $stmtUpdate->bind_param("sssssss", $nombre, $apellidos, $email, $foto, $password, $nomina);
            if ($stmtUpdate->execute()) {
                $successMessage = "Perfil actualizado exitosamente.";
            } else {
                $errorMessage = "Error al actualizar el perfil.";
            }
        } catch (Exception $e) {
            $errorMessage = "Error al actualizar: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="../CSS/styles_index.css">
</head>
<body>
<div class="container my-5">
    <h2 class="text-center">Editar Perfil</h2>
    <?php if ($errorMessage): ?>
        <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
    <?php elseif ($successMessage): ?>
        <div class="alert alert-success"><?php echo $successMessage; ?></div>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($user['nombre']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($user['apellido']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto de Perfil</label>
            <input type="file" class="form-control" id="foto" name="foto">
            <small>Deja este campo vacío si no deseas cambiar tu imagen actual.</small>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña Actual/Nueva Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>"required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
</body>
</html>