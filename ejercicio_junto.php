<?php 
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);     
  $data = json_decode($output);
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
            <?php 
            if (empty($data)) {
             echo "Error en el servicio";
            }else{
              ?>
              <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                  <tr>
                    <th>#</th>
                    <th>UserId</th>
                    <th>Title</th>
                    <th>Body</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($data as $row){ 
                    $info = json_decode(json_encode($row), true);
                    ?>
                    
                    <tr>
                      <td scope="row">
                        <?=$info["id"]?>
                      </td>
                      <td>
                        <?=$info["userId"]?>
                      </td>
                      <td>
                        <?=$info["title"]?>
                      </td>
                      <td>
                        <?=$info["body"]?>
                      </td>
                    </tr>
                    <?php 
                 }
                    
                  ?>
                  </tbody>
              </table>

              <div>
                <canvas id="myChart"></canvas>
              </div>
              
              <?php } ?>

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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
      ];

      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: [0, 10, 5, 2, 20, 30, 45],
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
    </script>
  </body>
</html>