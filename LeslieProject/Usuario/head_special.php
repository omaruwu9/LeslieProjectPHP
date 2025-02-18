<!DOCTYPE html>
<html lang="es" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGRPMX - Promex Logistics</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style-views.css" rel="stylesheet" media="screen" />
</head>

<!-- Se realiza la inserción del header (navbar) -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="adm_home.php"><img style="width: 120px;"
                                                         src="../../static/images/promex-logo-removebg-preview.png"
                                                         alt="Logo Promex" srcset=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../Usuario/user_home.php">Inicio</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="perfil.php">Perfil</a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="../../cerrar_sesion.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>