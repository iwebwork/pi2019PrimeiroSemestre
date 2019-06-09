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

  <!-- Adicionando Javascript -->
  <script type="text/javascript" src="js/viacep.js"></script>

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
            <a class="nav-link text-success" href="comodoar.php">Como doar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bg-success" href="parainstituicao.php">Para Instituições</a>
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
    <h1 class="my-5">Faça parte desta historia!</h1>
    <p class="my-8">Um Breve texto falando como é realizado o cadastro, termos e condições.</p><br><br>
</div>
    <!-- Portfolio Section -->
<div class="container">
    <div class="row justify-content-md-center">

      <form method="POST" action="php/cadastrar.php">

        <h4>Realizar Pre-Cadastro da Instituição</h4><br>
        <label>Nome:
        <input name="nome" class="form-control" type="text" id="nome" size="60" required/></label><br />

        <label>Responsavel:
        <input name="responsavel" class="form-control" type="text" id="responsavel" size="60" required/></label><br />

        <label>Cep:
        <input name="cep" class="form-control" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" required/></label>

        <label>Bairro:
        <input name="bairro" class="form-control" type="text" id="bairro" size="40" readonly="disabled"/></label><br />

        <label>Rua:
        <input name="rua" class="form-control" type="text" id="rua" size="60" readonly="disabled"/></label><br />

        <label>Numero:
        <input name="num_rua" class="form-control" type="number" id="num_rua" size="10" required/></label><br />

        <label>Cidade:
        <input name="cidade" class="form-control" type="text" id="cidade" size="40" readonly="disabled"/></label><br />

        <label>Estado:
        <input name="uf" class="form-control" type="text" id="uf" size="2" readonly="disabled"/></label><br />

        <label>E-mail:
        <input name="email" class="form-control" type="text" id="email" size="40" required/></label><br />

        <label>Telefone Fixo:
        <input name="tel_fixo" class="form-control" type="text" id="tel_fixo" size="40" required/></label><br />

        <label>Telefone Celular:
        <input name="tel_celular" class="form-control" type="text" id="tel_celular" size="40" /></label><br />

        <label>Descrição:
        <input name="descricao" class="form-control" type="text" id="descricao" size="40" /></label><br />

        <label>Horario de Funcionamento</label><br />
        <label>Inicio
        <input name="hr_inicio" type="time" class="form-control" type="text" id="hr_inicio" size="40" required/></label>

        <label>Fim
        <input name="hr_fim" type="time" class="form-control" type="text" id="hr_fim" size="40" required/></label><br />

        <input type="submit" class="btn btn-success" value="Cadastrar">
        <br><br><br><br>
        </div>
      </form>
    </div>
  </div>

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
