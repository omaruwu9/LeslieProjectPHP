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
<!-- Content -->
<div class="container my-5">
    <!-- Imagen y descripción -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="static/images/promex-inundacion.jpeg" alt="Imagen de la Empresa" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold justify">¿Quiénes somos?</h2>
            <p style="text-align: justify;">
                Promex Logistics es una Empresa fundada en Enero 2013 bajo el principal objetivo de colaborar integralmente con su cliente primario (Honda de México) en la puesta en marcha y arranque de su Planta de Autos y Motores ubicada en la Ciudad de Celaya, Guanajuato. <br>
                <br>
                Cuenta con una fuerza laboral de más de 700 empleados capaz de desempeñar diferentes tareas de Operación, Planeación, Administración, Desarrollo y Prospección. La diversidad de Culturas y enfoques hace que sea una de nuestras fortalezas al momento de proponer soluciones integrales a los retos que se presenten. <br>
                <br>
                Promex Logistics está comprometida con la Sociedad, procurando la Seguridad de sus trabajadores y el Medio Ambiente que le rodea.
            </p>
        </div>
    </div>
    <div class="divider"></div> <!-- Separador -->

    <!-- Misión y Visión -->
    <div class="row text-center mb-5">
        <div class="col-md-6 hover-effect">
            <h3 class="fw-bold"><img style="width: 48px;" src="static/images/AboutUs/Icon-mision.png"><br>Misión</h3>
            <p style="text-align: justify;">
                Nuestro principal objetivo es satisfacer las necesidades de nuestros clientes a través de soluciones logísticas integrales, implementando la experiencia, tecnología y nuestro conocimiento a nivel internacional, comprometidos a ofrecer un servicio con altos estándares de calidad, seguridad y eficiencia.
                <br> <br>
                Buscamos la rentabilidad compartida y crecimiento mutuo con nuestros clientes. Somos una empresa socialmente responsable contando con un ambiente laboral único y propio
            </p>
        </div>
        <div class="col-md-6 hover-effect">
            <h3 class="fw-bold"><img style="width: 48px;" src="static/images/AboutUs/Icon-vision.png"><br>Visión</h3>
            <p style="text-align: justify;">
                Ser un modelo global de soluciones logísticas integrales con los servicios más amplios, capaz de satisfacer las expectativas y necesidades del mercado, mediante la innovación, desarrollo de tecnologías y perfeccionamiento de nuestros servicios a través de la mejora continua.
            </p>
        </div>
    </div>
    <div class="divider"></div> <!-- Separador -->

    <!-- Valores -->
    <div class="row text-center">
        <h3 class="fw-bold mb-4">Nuestros Valores</h3>
        <div class="col-md-4 hover-effect">
            <h5 class="fw-bold">Respeto Mutuo</h5>
            <img style="width: 48px;" src="static/images/AboutUs/Icon-respeto.png">
            <p>Las relaciones con nuestros colaboradores, la comunidad, nuestros clientes y proveedores, se basa en una relación con respeto mutuo.</p>
        </div>
        <div class="col-md-4 hover-effect">
            <h5 class="fw-bold">Responsabilidad</h5>
            <img style="width: 48px;" src="static/images/AboutUs/Icon-responsabilidad.png">
            <p>Asumimos las obligaciones que nacen de la responsabilidad social ante la comunidad y le medio ambiente.</p>
        </div>
        <div class="col-md-4 hover-effect">
            <h5 class="fw-bold">Excelencia</h5>
            <img style="width: 48px;" src="static/images/AboutUs/Icon-excelencia.png">
            <p>Nuestras acciones están encaminadas a lograr la excelencia en todos los aspectos.</p>
        </div>
        <div class="col-md-6 mx-auto text-center hover-effect mt-4">
            <h5 class="fw-bold">Integridad</h5>
            <img style="width: 48px;" src="static/images/AboutUs/Icon-integridad.png">
            <p>Nuestro orgullo es comenzar con la integridad personal que converge en la integridad colectiva.</p>
        </div>
        <div class="col-md-6 mx-auto text-center hover-effect mt-4">
            <h5 class="fw-bold">Unicidad</h5>
            <img style="width: 48px;" src="static/images/AboutUs/Icon-unicidad.png">
            <p>Es la cualidad de ser único que marca la diferencia en nosotros.</p>
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

<!-- Footer -->
<footer>
    &copy; Copyright 2025 Promex Logistics S. de R.L. de C.V. Derechos reservados.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>