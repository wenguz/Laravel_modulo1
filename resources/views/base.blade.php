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
    <div class="container">
        <div class="row">
            <!--cada fila debe tener 12 colum.Siquiero generar 3 columnas sera.-->
            <div class="col-md-4 bg-info text-light col-sm-12">
                <h1>Columna 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cumque adipisci architecto id corporis porro soluta earum quia praesentium unde temporibus, voluptates sed odit recusandae culpa modi ad minus! Sint.</p>
            </div>
            <div class="col-md-4 bg-secondary text-light col-sm-6">
            <h1>Columna 2</h1>
            <!--con la clasese adapta una imagengrande-->
                <p><img src="images/fondo1.jpg" class="img-fluid"></p>
                <!--Otraforma decargar archivos cuandose tiene muchos.Cuando setiene el archivodentro del proyecto
                <p><img src={{asset('images/fondo1.jpg')}} class="img-fluid"></p>-->
            </div>
            <div class="col-md-4 bg-info text-light col-sm-6">
            <h1>Columna 3</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe nisi quas perferendis officia quidem reiciendis temporibus, eum fugiat aliquid unde.</p>
            </div>
        </div>    
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>