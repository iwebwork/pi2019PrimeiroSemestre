<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" />

  <title>DoeFácil</title>

  <!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <?php
      include '../php/class/Usuario.class.php';
      $usuario = new Usuario();
      $usuario->login();
  ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <div class="text-center"><a class="navbar-brand" href="..\index.html">
              <img src="..\img\logo.png" alt="Logo DoeFácil">
            </a></div><br>
            <h5 class="card-title text-center">Login</h5>

            <form class="form-signin" method="POST">

              <div class="form-label-group">
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                <label for="inputEmail">E-mail</label>
              </div>

              <div class="form-label-group">
                <input name="senha" type="password" id="inputSenha" class="form-control" placeholder="Senha" required>
                <label for="inputSenha">Senha</label>
              </div>
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/login.js"></script>
