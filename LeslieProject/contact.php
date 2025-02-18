<?php
include 'head.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGRPMX - Promex Logistics</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/style-principals.css" th:href="@{/css/style-principals.css}" rel="stylesheet" media="screen" />
    <style>
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }
    </style>
</head>
<body>
<!-- Contenido principal -->
<main>
    <div class="container my-5">
        <h3 class="fw-bold center" align="center">Contáctanos</h3>
        <p align="center">Utiliza el medio que más se acerque a tu consulta o necesidad para comunicarte con nosotros</p> <br>
        <div class="row">
            <div class="col-md-4">
                <h3 class="fw-bold"><img style="width: 48px;" src="static/images/Contact/icon-oficinas.png"> Oficinas</h3>
                <p>
                    A través de este contacto podremos aclarar tus dudas acerca de nosotros. <br>
                    📞 Teléfono: +52 (461) 202 1350 Ext. 51800 <br>
                    📩 Correo: <a href="mailto:contacto@promex-logistics.mx">contacto@promex-logistics.mx</a><br>
                    📍 Dirección: Carretera Libramiento Sur Km 6, Colonia La Luz, Celaya, Guanajuato.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="fw-bold"><img style="width: 48px;" src="static/images/Contact/icon-trabaja-con-nosotros.png"> Trabaja con nosotros</h3>
                <p>
                    Déjanos tus datos para poder considerarte como candidato en nuestro equipo de trabajo. <br>
                    📱 Celular: +52 1 (461) 180 0066 <br>
                    📩 Correo: <a href="mailto:reclutamiento@promex-logistics.mx">reclutamiento@promex-logistics.mx</a>
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="fw-bold"><img src="static/images/Contact/icon-comercial.png"> Comercial</h3>
                <p>
                    Por medio de esta línea podremos ofrecerte una gama de servicios que ponemos a tu disposición o
                    bien, podemos trabajar de manera conjunta en la solución de tus necesidades específicas. <br>
                    📞 Teléfono: +52 (461) 202 1350 Ext. 51806 <br>
                    📩 Correo: <a href="mailto:comercial@promex-logistics.mx">comercial@promex-logistics.mx</a><br>
                </p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4 fw-bold">Nos ubicamos en:</h2>
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7475.408451620398!2d-100.77829109999999!3d20.477337899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cb0b6bd995473%3A0x3b1142281f75af01!2sPROMEX%20Logistics%20S.de%20R.L.deC.V.!5e0!3m2!1ses!2smx!4v1737653117879!5m2!1ses!2smx"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        width="100%"
                        height="400px"
                        style="border:0;"></iframe>
            </div>
        </div>

        <div class="divider">★</div> <!-- Separador -->

        <!-- redes sociales -->
        <div class="social-icons mt-4 text-center">
            <h3 class="fw-bold mb-4">Siguenos...</h3>
            <center>
                <a href="https://web.facebook.com/hondalogisticsnorthamerica/?_rdc=1&_rdr"><img src="static/images/facebook-logo.png" alt="Facebook" class="social-icon" style="width: 40px;"></a>
                <a href="javascript:void(0);"><img src="static/images/x-logo.png" alt="X" class="social-icon" style="width: 40px;"></a>
                <a href="https://www.linkedin.com/company/hlna"><img src="static/images/linkedIn-logo.png" alt="LinkIn" class="social-icon" style="width: 60px;"></a>
            </center>
        </div>
    </div>
</main>

<!-- Footer -->
<footer>
    &copy; Copyright 2025 Promex Logistics S. de R.L. de C.V. Derechos reservados.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
