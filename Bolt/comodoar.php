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

  <!-- css pessoais -->
  <link rel="stylesheet" type="text/css" href="css/utilites.css">

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
            <a class="nav-link text-success" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bg-success" href="comodoar.php">Como doar</a>
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

  <section class="margin-top">
    <!--
      private $nome_respons;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $email;
    private $telefone;
    private $celular;
    private $descricao;
    private $horario_func;
    private $img;
    -->
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <form method="POST" action="php/cadastrar.php">
            <input name="nome_respons" class="form-control" type="text" placeholder="Seu nome" required>
            <input name="nome_inst" class="form-control" type="text" placeholder="Nome da Instituição" required>
            <input name="rua" class="form-control" type="text" placeholder="Rua" required>
            <input name="numero" class="form-control" type="number" placeholder="Numero" required>
            <input name="bairro" class="form-control" type="text" placeholder="Bairro" required>
            <input name="cidade" class="form-control" type="text" placeholder="Cidade" required>
            <input name="estado" class="form-control" type="text" placeholder="Estado" required>
            <input name="email" class="form-control" type="text" placeholder="Email para contato" required>
            <input name="telefone" class="form-control" type="text" placeholder="Telefone" required>
            <input name="celular" class="form-control" type="text" placeholder="Celular" required>
            <input name="descricao" class="form-control" type="text" placeholder="Faça uma breve descricao do que você faz">
            <div class="form-group row">
              <div class="col-10">
                <div>Horario de abertura</div>
                <input name="horario_abertura" class="form-control" type="time" id="example-time-input">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-10">
                <div>Horario de fechamento</div>
                <input name="horario_fechamento" class="form-control" type="time" id="example-time-input">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
