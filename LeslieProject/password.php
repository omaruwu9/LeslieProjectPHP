<?php
include 'head.php';
?>

<!DOCTYPE html>
<html lang="es" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGRPMX - Promex Logistics</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/style-principals.css" th:href="@{/css/style-principals.css}" rel="stylesheet" media="screen" />
</head>
<body>
<div class="hero main-content">
    <div class="container my-6 align-items-center col-md-12">
        <div class="row">
            <div class="login-container col-md-4 text-center text-md-start mb-6 align-items-center">
                <h3 align="center">Recuperar contraseña</h3>
                <form action="login.html" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nomina" placeholder="No. Nomina" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Correo Electronico" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Recuperar</button>
                </form>

                <!-- redes sociales -->
                <div class="social-icons mt-4">
                    <center>
                        <a href="https://web.facebook.com/hondalogisticsnorthamerica/?_rdc=1&_rdr"><img src="static/images/facebook-logo.png" alt="Facebook" class="social-icon" style="width: 40px;"></a>
                        <a href="javascript:void(0);"><img src="static/images/x-logo.png" alt="X" class="social-icon" style="width: 40px;"></a>
                        <a href="https://www.linkedin.com/company/hlna"><img src="static/images/linkedIn-logo.png" alt="LinkIn" class="social-icon" style="width: 60px;"></a>
                    </center>
                </div>
            </div>
            <div class="col-md-7 text-white text-center text-md-start d-flex justify-content-end align-items-center">
                <img style="width: 320px;" src="static/images/PGRPMX_log-preview.png" alt="Logo Promex">
                <p></p>
            </div>
        </div>
    </div>
</div>



<!-- Se hace la inserción-->
<footer class="footer">
    &copy; Copyright 2025 Promex Logistics S. de R.L. de C.V. Derechos reservados.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


