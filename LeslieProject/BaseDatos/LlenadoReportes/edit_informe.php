<?php
include '../../Usuario/head_special.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="/static/css/style-views.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px;
        }

        .column {
            flex: 1;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 8px;
            margin: 10px;
        }

        .form-control, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #ff5722;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #e64a19;
        }

        .navbar {
            background-color: #ff5722;
        }

        .navbar a {
            color: white;
            font-weight: bold;
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
<div class="container">
    <!-- Columna Izquierda: Solo lectura -->
    <div class="column">
        <h3>Información de Orden</h3>
        <?php include '../../BaseDatos/LlenadoReportes/read_report_softland.php'; ?>

        <br>

        <div class="form-group">
            <h3>Factura</h3>
            <input type="file" value="Carga de Factura"><br><br>
            <input type="submit" value="Subir Archivo">
            <input type="submit" value="Llenado manual">
        </div>
    </div>

    <!-- Columna Central: Formulario de actualización -->
    <div class="column">
        <h3>Actualizar información</h3>
        <form action="update_info.php" method="POST">
            <input type="hidden" name="id_orden" value="<?php echo $row['id_orden']; ?>">

            <div class="form-group">
                <label for="fecha_ent">Fecha de entrega:</label>
                <input type="date" id="fecha_ent" name="fecha_ent" class="form-control" value="<?php echo $row['fecha_ent'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" class="form-control" value="<?php echo $row['cantidad'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="poliza_gar">Poliza de garantía:</label>
                <input type="number" id="poliza_gar" name="poliza_gar" class="form-control" value="<?php echo $row['poliza_gar'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="fecha_ven">Fecha de vencimiento:</label>
                <input type="date" id="fecha_ven" name="fecha_ven" class="form-control" value="<?php echo $row['fecha_ven'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control" value="<?php echo $row['descripcion'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="familia">Familia:</label>
                <select id="familia" name="familia" class="form-control" required>
                    <option value="2.1 Labor Coast Outside" <?php if ($row['familia'] == '1') echo 'selected'; ?>>2.1 Labor Coast Outside</option>
                    <option value="3.1 Software" <?php if ($row['familia'] == '2') echo 'selected'; ?>>3.1 Software</option>
                </select>
            </div>

            <div class="form-group">
                <label for="responsable">Responsable:</label>
                <select id="responsable" name="responsable" class="form-control" required>
                    <option value="Leslie Caracheo" <?php if ($row['responsable'] == '1') echo 'selected'; ?>>Leslie Caracheo</option>
                    <option value="German Tirado" <?php if ($row['responsable'] == '2') echo 'selected'; ?>>German Tirado</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ext_pres">Extension de presupuesto:</label>
                <select id="ext_pres" name="ext_pres" class="form-control" required>
                    <option value="S" <?php if ($row['ext_pres'] == '1') echo 'selected'; ?>>Si</option>
                    <option value="N" <?php if ($row['ext_pres'] == '2') echo 'selected'; ?>>No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="proyecto">Proyecto:</label>
                <select id="proyecto" name="proyecto" class="form-control" required>
                    <option value="3AR (ADELANTO)" <?php if ($row['proyecto'] == '1') echo 'selected'; ?>>3AR (adelanto)</option>
                    <option value="ADELANTO" <?php if ($row['proyecto'] == '2') echo 'selected'; ?>>Adelanto</option>
                </select>
            </div>

            <div class="form-group">
                <label for="descuento1">Descuento 1 (%):</label>
                <input type="number" id="descuento1" name="descuento1" class="form-control" value="<?php echo $row['descuento1'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="descuento2">Descuento 2 ($):</label>
                <input type="number" id="descuento2" name="descuento2" class="form-control" value="<?php echo $row['descuento2'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="IVA_p">IVA %:</label>
                <input type="number" id="IVA_p" name="IVA_p" class="form-control" value="<?php echo $row['IVA_p'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="IVA">IVA $:</label>
                <input type="number" id="IVA" name="IVA" class="form-control" value="<?php echo $row['IVA'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="otros_cargos">Otros cargos:</label>
                <input type="number" id="otros_cargos" name="otros_cargos" class="form-control" value="<?php echo $row['otros_cargos'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="otros_cargos2">Otros cargos 2:</label>
                <input type="number" id="otros_cargos2" name="otros_cargos2" class="form-control" value="<?php echo $row['otros_cargos2'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" id="total" name="total" class="form-control" value="<?php echo $row['total'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="tipo_cambio">Tipo de cambio:</label>
                <input type="number" id="tipo_cambio" name="tipo_cambio" class="form-control" value="<?php echo $row['tipo_cambio'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="pesos_totales">Pesos Totales:</label>
                <input type="number" id="pesos_totales" name="pesos_totales" class="form-control" value="<?php echo $row['pesos_totales'] ?? ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select id="estatus" name="estatus" class="form-control" required>
                    <option value="Completo" <?php if ($row['estatus'] == '1') echo 'selected'; ?>>Completo</option>
                    <option value="Pendiente" <?php if ($row['estatus'] == '2') echo 'selected'; ?>>Pendiente</option>
                    <option value="Factura Pendiente" <?php if ($row['estatus'] == '3') echo 'selected'; ?>>Factura Pendiente</option>
                </select>
            </div>



            <br>

            <div class="form-group">
                <input type="submit" value="Actualizar Información">
            </div>
        </form>
    </div>

<!--     Columna Derecha: Factura -->
<!--    <div class="column">-->
<!---->
<!--    </div>-->
</div>

<!-- Se hace la inserción-->
<footer class="footer">
    &copy; Copyright 2025 Promex Logistics S. de R.L. de C.V. Derechos reservados.
</footer>
</body>
</html>
