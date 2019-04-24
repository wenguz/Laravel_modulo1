<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--viewpoert es paraadaptarse a al pantalla queeste-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Cusro Laravel</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h1 class="my-0 mr-md-auto font-weight-normal">Modulo 1 - Laravel</h1>
        <nav>
            <div class="nav nav-tabs " id="nav-tab" role="tablist">
                <a class="nav-item nav-link" role="tab" aria-selected="true" href="./saludo">INICIO</a>
                <a class="nav-item nav-link" role="tab" aria-selected="false" href="./servicio">SERVICIOS</a>
                <a class="nav-item nav-link" role="tab" aria-selected="false"  href="./nosotros">NOSOTROS</a>
                <a class="nav-item nav-link" role="tab" aria-selected="false" href="./contacto">CONTACTO</a>
            </div>
        </nav>
    </div>
    <div>
        @section('contenido')
        @show
    </div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<!--Para que funcione el menu -->
<script src="js/bootstrap.js" ></script>
</body>
</html>