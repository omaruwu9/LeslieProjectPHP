<?php
include 'db.php';

$search_nomina = isset($_GET['search_nomina']) ? trim($_GET['search_nomina']) : '';

if ($search_nomina) {
    $sql = "SELECT * FROM Usuario WHERE nomina LIKE ?";
    $stmt = $conn->prepare($sql);
    $search_param = "%{$search_nomina}%";
    $stmt->bind_param("s", $search_param);
} else {
    $sql = "SELECT * FROM Usuario";
    $stmt = $conn->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();
?>

<style>
    /* Centrar solo el contenedor de la tabla */
    .table-container {
        display: flex;
        justify-content: center; /* Centra la tabla horizontalmente */
        align-items: center; /* Centra la tabla verticalmente */
    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 90%; /* Ajusta el tamaño de la tabla */
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }


</style>

<div class="table-container">
    <table id="customers">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>No. Nomina</th>
            <th>Email</th>
            <th>Password</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . htmlspecialchars($row['id_usuario']) . "</td>
                <td>" . htmlspecialchars($row['nombre']) . "</td>
                <td>" . htmlspecialchars($row['apellido']) . "</td>
                <td>" . htmlspecialchars($row['nomina']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['password']) . "</td>
                <td>" . htmlspecialchars($row['id_rol']) . "</td>
                <td>
                    <a href='../BaseDatos/edit_user.php?id=" . htmlspecialchars($row['id_usuario']) . "'>📝</a> |
                    <a href='../BaseDatos/delete_user.php?id={$row['id_usuario']}' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este usuario?\")'>🗑️</a>
                </td>
              </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No hay usuarios registrados</td></tr>";
        }
        ?>
    </table>
</div>

<?php
$stmt->close();
$conn->close();
?>
