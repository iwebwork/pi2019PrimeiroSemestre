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

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg bg-white fixed-top nav-pills border-bottom" style="border-color: #74cfae">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img\logo.png" class="float-left" alt="Logo DoeFácil"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-success" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bg-success" href="comodoar.php">Como doar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="parainstituicao.php">Para Instituições</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="sobre.php">Sobre nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="contato.php">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <br><br>
    <h1 class="my-5">Como Doar</h1>
    <p>Um Breve texto falando como é realizado as doações.</p>

    <!-- Portfolio Section -->
    <br><br>
    <label for="sel1">Selecione por onde deseja pesquisar:</label>
    <form method="POST">
      <div class="row">
        <div class="col-3">
          <select name="tipo" class="form-control" id="sel1">
            <option value="1">Bairro</option>
            <option value="2">Cidade</option>
            <option value="3">Estado</option>
          </select>
        </div>
        <div class="col-5">
          <input name="pesquisa" type="text" id="inputPesquisa" class="form-control" placeholder="Digite sua pesquisa: Cidade ou Bairro ou Estado. Ex: MG">
        </div>
        <div class="col-2">
          <button class="btn btn-success btn-block text-uppercase" type="submit">Pesquisar</button>
        </div>
      </div>
    </form>
    <br>
     <hr>
     <br>
    
    <?php
        include_once 'php/class/Instituicao.class.php';
        $inst = new Instituicao();
        if (!empty($_POST)) {
          # code...
          //print_r($_POST);
          //tipos de pesquisa
          //1 - Bairro
          //2 - Cidade
          //3 - Estado
          if($_POST['tipo'] == 1){
            //echo "chamou a busca de bairro";
            $inst->escreverOsDados($inst->buscarBairroComVistoriaOK($_POST['pesquisa']));
          }else if($_POST['tipo'] == 2){
            //echo "chamou a busca de cidade";
            $inst->escreverOsDados($inst->buscarCidadeComVistoriaOK($_POST['pesquisa']));
          }else if($_POST['tipo'] == 3){
            //echo "chamou a busca de estado";
            $inst->escreverOsDados($inst->buscarEstadoComVistoriaOK($_POST['pesquisa']));
          }else{

          }
        }
    ?>  
     


  </div>

  <br><br><br><br>
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
