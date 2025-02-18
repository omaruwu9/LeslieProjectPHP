<?php
    include 'head.php';
?>
<!DOCTYPE html>
<html lang="es" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGRPMX - Promex Logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .Card {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .CardInner {
            text-align: center;
        }

        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .search-form {
            width: 100%;
        }

        .input-group {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .input-group-prepend .input-group-text {
            background-color: #fff;
            border: 2px solid #04AA6D;
            border-right: none;
            border-radius: 20px 0 0 20px;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .form-control {
            border-radius: 0;
            border: 2px solid #04AA6D;
            border-left: none;
            border-right: none;
            padding: 10px 20px;
            font-size: 16px;
            flex-grow: 1;
        }

        .input-group-append .btn {
            border-radius: 0 20px 20px 0;
            border: 2px solid #04AA6D;
            border-left: none;
            background-color: #04AA6D;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .input-group-append .btn:hover {
            background-color: #028a5e;
            border-color: #028a5e;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <br>
        <h1>
            <center>Lista de Usuarios</center>
        </h1>
        <div class="CardInner">
            <div class="container search-bar">
                <form method="GET" action="" class="search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        </span>
                        </div>
                        <input type="text" class="form-control" name="search_nomina" placeholder="Buscar por No. Nomina" aria-label="Buscar por No. Nomina" aria-describedby="button-search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-search">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <p>NOTA: el valor 1 en rol indica Administrador, el valor 2 en rol indica Usuario</p>
        <!-- Barra de búsqueda -->

        <?php include '../BaseDatos/read_user.php'; ?>
    </div>
    <br>
</div>




<!-- Se hace la inserción-->
<footer class="footer">
    &copy; Copyright 2025 Promex Logistics S. de R.L. de C.V. Derechos reservados.
</footer>

</body>
</html>