<?php
// BaseDatos/insert_user.php
function insertar_usuario($nombre, $apellidos, $nomina,$email, $password, $id_rol) {
    // Conexión a la base de datos
    $host = "localhost";
	$user = "omaruwu9";
	$pass = "omaruwu9";
	$db = "prueba_proyecto";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta de inserción
        $sql = "INSERT INTO usuario (nombre, apellido, nomina, email, password, id_rol) 
                VALUES (:nombre, :apellido, :nomina, :email, :password, :id_rol)";

        $stmt = $conn->prepare($sql);

        // Enlace de los parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellidos);
        $stmt->bindParam(':nomina', $nomina);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id_rol', $id_rol);

        // Ejecutar la consulta
        if($stmt->execute()){
            return true;
        }else{
            echo "Error en la inserción: ".$stmt->error;
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
?>
