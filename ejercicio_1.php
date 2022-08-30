<?php 
$n_1 = floor(isset($_GET["n_1"])?$_GET["n_1"]:0);
$n_2 = floor(isset($_GET["n_2"])?$_GET["n_2"]:0);

if($n_1 > 0 && $n_2 > 0){
    $total = $n_1 * $n_2;
    $message = "el resultado de la operacion '".$n_1." * ".$n_2." = ".$total."'";
}else{
    $message = "error interno";
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
            <p class="bg-warning text-white m-3 p-3">
            <?php 
            echo $message
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