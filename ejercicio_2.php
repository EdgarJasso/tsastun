<?php 
$nombre = isset($_GET["nombre"])?$_GET["nombre"]:"";
$apellidos = isset($_GET["apellidos"])?$_GET["apellidos"]:"";
$correo = isset($_GET["correo"])?$_GET["correo"]:"";
$edad = isset($_GET["edad"])?$_GET["edad"]:"";

if($nombre != "" && $apellidos != "" && $correo != "" && $edad != ""){
    $validate = true;
}else{
    $validate = false;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Tsatun</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">

    <div class="container-fluid">
        <div class="jumbotron my-5">
            <h1 class="display-3">Tsastun</h1>
            <p class="lead">Examen tecnico</p>
            <hr class="my-2">
            <p>Desarrollado por: Edgar Jasso</p>
            <hr class="my-2">
            <p>Descripción</p>
            <p class="bg-info text-white m-3 p-3">
            <?php 
               if ($validate) {
                ?>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                <?=$nombre?>  <?=$apellidos?> (<?=$edad?>años)
                                </h4>
                                <p class="card-text">
                                    <a href="mailto:<?=$correo?>"><?=$correo?></a>
                                </p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                <?php 
               }else{
                echo "Error en el servicio";
               }
            ?>
            </p>

            <p class="lead text-center">
                <a class="btn btn-primary btn-lg" href="index.html" role="button">Regresar</a>
            </p>

        </div>    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>