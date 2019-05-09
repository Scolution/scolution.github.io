<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pure Vanilla | Custom recipes</title>

  <link rel="shortcut icon" href="https://scolution.dev/pv/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://scolution.dev/pv/img/favicon.ico" type="image/x-icon">
 
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet">

</head>

<body>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Pure Vanilla</h1>
      <p class="lead">Custom recipes</p>
      <p class="lead">Made with 🍾 by <a href="https://scolution.dev" target="_blank">Scolution</a></p>
      <a href="https://purevanilla.nl" class="btn btn-primary btn-lg pull-right">Back to purevanilla.nl</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://scolution.dev/pv/img/dpeff2.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Diamond Pickaxe</h4>
            <p class="card-text">Efficiency II</p>
          </div>
        </div>
      </div>

    <?php
      $ip = '5.135.198.176';
      $port = 26285;

      $checkSock = @fsockopen($ip, $port, $empty, $empty, 1);

      if($checkSock !== FALSE)
      {
        echo  'Online';
      }else{
        echo  'Offline';
      }
    ?>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://scolution.dev/pv/img/dpeff5.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Diamond Pickaxe</h4>
            <p class="card-text">Efficiency V</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://scolution.dev/pv/img/sadle.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Sadle</h4>
            <p class="card-text">I've said enough 🙃</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://scolution.dev/pv/img/soon.png" alt="">
          <div class="card-body">
            <h4 class="card-title">To be announced</h4>
            <p class="card-text">😏</p>
          </div>
        </div>
      </div>

    </div>

    <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="https://scolution.dev/pv/img/soon.png" alt="">
              <div class="card-body">
                <h4 class="card-title">To be announced</h4>
                <p class="card-text">😏</p>
              </div>
            </div>
          </div>
  
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="https://scolution.dev/pv/img/soon.png" alt="">
              <div class="card-body">
                <h4 class="card-title">To be announced</h4>
                <p class="card-text">😏</p>
              </div>
            </div>
          </div>
  
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="https://scolution.dev/pv/img/soon.png" alt="">
              <div class="card-body">
                <h4 class="card-title">To be announced</h4>
                <p class="card-text">😏</p>
              </div>
            </div>
          </div>
  
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <img class="card-img-top" src="https://scolution.dev/pv/img/soon.png" alt="">
            <div class="card-body">
              <h4 class="card-title">To be announced</h4>
              <p class="card-text">😏</p>
            </div>
          </div>
        </div>
  
      </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
