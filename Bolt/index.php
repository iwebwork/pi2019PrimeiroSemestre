<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DoeFácil</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg bg-white fixed-top nav-pills">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="img\logo.png" class="float-left" style="width: 90px; height: 50px;" alt="Logo DoeFácil"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active bg-success" href="index.html">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="comodoar.html">Como doar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="sobre.html">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="contato.html">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/slider1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Primeiro Slide</h3>
            <p>Breve descrição do slide.</p>
            <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Ver mais</button>
            <button class="btn btn-sm btn-success my-2 my-sm-0" type="submit">Ver mais</button>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/slider2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Segundo Slide</h3>
            <p>Breve descrição do slide.</p>
            <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Ver mais</button>
            <button class="btn btn-sm btn-success my-2 my-sm-0" type="submit">Ver mais</button>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/slider3.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Terceiro Slide</h3>
            <p>Breve descrição do slide.</p>
            <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Ver mais</button>
            <button class="btn btn-sm btn-success my-2 my-sm-0" type="submit">Ver mais</button>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Bem vindo ao DoeFácil</h1>

    <!-- Portfolio Section -->

    <div class="row">
      <?php
        include 'php/class/Instituicao.class.php';
        $ins = new Instituicao();
        $ins->escreverOsDados($ins->buscarTodosOsDados());
      ?>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Falar sobre Projetos</h2>
        <p>Nosso projeto é direcionado para promover:</p>
        <ul>
          <li>Agilidade</li>
          <li>Segurança</li>
          <li>Sociedade</li>
          <li>Acolhimento</li>
          <li>Cidadania</li>
        </ul>
        <p>Breve texto.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" style="height: 350px; width: 350px" src="img/doacao.png" alt="">
      </div>
    </div>
    <!-- /.row -->
    <p></p>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DoeFácil 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
