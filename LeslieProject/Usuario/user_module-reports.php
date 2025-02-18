<?php
include 'head.php';

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
<!-- Se hace la inserción-->
<footer class="footer">
    &copy; Copyright 2025 Promex Logistics S. de R.L. de C.V. Derechos reservados.
</footer>
</body>
</html>