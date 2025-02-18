<?php
include 'db.php';


$id_usuario = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nomina =$_POST['nomina'];
$email = $_POST['email'];
$password = $_POST['password'];
if (!isset($_POST['id_rol']) || $_POST['id_rol'] === "") {
    die("Error: id_rol no recibido o vacío.");
}
$id_rol = intval($_POST['id_rol']); // Asegurar que sea un número entero

$sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', nomina='$nomina', email='$email', password='$password', id_rol='$id_rol' WHERE id_usuario=$id_usuario";

if ($conn->query($sql) === TRUE) {
     echo "<script>
                alert('Usuario actualizado exitosamente');
                window.location.href = '/LeslieProject/Administrador/adm_list-user.php';
              </script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
