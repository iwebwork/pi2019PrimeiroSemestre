<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Doe Fácil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Bolt
    Template URL: https://templatemag.com/bolt-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="80" data-target="#thenavbar">

  <!-- Fixed navbar -->
  <div id="thenavbar" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#"><i class="fa fa-bolt"></i></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#hello" class="smoothscroll">Início</a></li>
          <li><a href="#green" class="smoothscroll">Sobre nós</a></li>
          <li><a href="#portfolio" class="smoothscroll">Instituições</a></li>
          <li><a href="#contact" class="smoothscroll">Cadastre sua instituição</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div id="hello">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <h1>Doe Fácil</h1>
          <h2>O site de instituições de Contagem e região!</h2>
        </div>
        <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /hello -->

  <div id="green">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 centered">
          <img src="img/iphone.png" alt="">
        </div>

        <div class="col-lg-6 centered">
          <h3>Quem somos?</h3>
          <p>Somos estudantes de sistemas de informação na instituição Una de Contagem/MG e este site foi desenvolvido com o intuito de ajudar a sociedade. Sendo assim escolhemos como tema doação; então aqui você pode consultar locais próximos da sua casa que recebem doaçoes ou se você é uma instituição de caridade cadastre-se para que possiveis doadores vejam seu perfil! :)</p>
        </div>

        <div class="col-lg-3 centered">
      </div>
    </div>
  </div>
  <div id="portfolio"></div>
  <div class="container">
    <div class="row centered mt grid">
      <h3>Instituições</h3>
      <div class="mt"></div>
      <?php 
        include 'php/class/Instituicao.class.php';
        $instituicao = new Instituicao();
        $instituicao->escreverOsDados($instituicao->buscarTodosOsDados());
      ?>
    </div>

    <div class="row centered mt grid">
      
    </div>

    
  </div>


  <div id="skills">
    <div class="container">
      <div class="row centered">
        <h3></h3>
        
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /skills -->

  <section id="contact">
<div id="social">
      <div class="container">
        <div class="row centered">
          
          </div>
        </div>
      </div>
     
    
    <!-- /social -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            
            <div class="row centered mt grid">
      <h3>Cadastre sua instituição</h3>
      <div class="mt"></div>
      
    </div>
            
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Cadastrar</button>
            </div>

          </form>
        </div>
      </div>
    </div>
<div id="social">
      
       
         
          
  <div id="skills">
    <div class="container">
      <div class="row centered">
     
        
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /skills -->

         <div class="container"> 
          
              
               <div class="row mt centered">
      <div class="col-lg-7 col-lg-offset-1 mt">
        <p class="lead">Há algo errado no cadastro da sua instituição?</p><p> Deseja relatar um erro?</p>
      </div>

      <div class="col-lg-3 mt">
        <p><button type="button" class="btn btn-theme btn-lg">Nos mande um e-mail!<link hel=href="https:\\gmail.com"></button></p>
      </div>
    </div>
              
         
        </div>
      </div>
      <!-- /container -->
  
  </section>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Bolt</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/bolt-bootstrap-agency-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Bolt template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/chart/chart.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
