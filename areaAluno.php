<?php 
  session_start();

  if(!isset($_SESSION['usuario'])){
    header('Location: index.php?erro=2');
  }

  $sucesso = isset($_GET['sucesso']) ? $_GET['sucesso'] : 0;
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

  switch($sucesso){
    case 1: 
      echo '<script>alert("Seu agendamento de DIGITAÇÃO foi realizado com sucesso!")</script>';
      break;

    case 2: 
      echo '<script>alert("Seu agendamento de PALESTRA foi realizado com sucesso!")</script>';
      break;

    case 3: 
      echo '<script>alert("Seu agendamento de REPOSIÇÃO foi realizado com sucesso!")</script>';
      break;
  }

  if($erro == 1){
    echo '<script>alert("Você ja possui um agendamento de palestra ativado!")</script>';
  }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- ICONES -->
    <link rel="icon" href="assets/img/favicon-microlins.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    

    <title>Area do Aluno - Digitação</title>
  </head>
  <body class="body">

    <header>
      <div class="navbar navbar-expand-lg barra-nav fixed-top">
        <div class="container">
          <a class="navbar-brand"><img src="assets/img/logo.png" width="50px"></a>

          <ul class="navbar-nav">

            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="opcoesDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seja bem vindo, <?= $_SESSION['nome'] ?></a> 

              <div class="dropdown-menu" aria-labelledby="opcoesDrop">
                <a class="dropdown-item" href="meusagendamentos.php">Meus agendamentos</a>
                <a class="dropdown-item" href="assets/php/sair.php">Sair</a>
              </div>
            </li>
          </ul><!--Fim navbar nav-->
        </div><!--Fim container-->
      </div><!--Fim barranav-->
    </header>

    <div class="container container-area-aluno">
      <div class="row">
        <div class="col-12 col-md-8" id="container-formulario-agendamento">
          <center><img src="assets/img/Learning.gif" class="img-fluid img-inicio"></center>
        </div><!--Fim col-->
        <div class="col-12 col-md-3">
          <div class="container-botoes">
            <h6>Selecione o tipo de agendamento:</h6>
            <a class="link-agendamento" href="#" onclick="requisicao('agendamentoDigitacao.html', '#container-formulario-agendamento')">Agendamento Digitação</a>
            <a class="link-agendamento" href="#" onclick="requisicao('agendamentoPalestra.html', '#container-formulario-agendamento')">Agendamento Palestra</a>           
            <a class="link-agendamento" href="#" onclick="requisicao('agendamentoReposicao.html', '#container-formulario-agendamento')">Agendamento Reposição</a>
          </div><!--Fim container botoes-->
        </div><!--Fim row-->
      </div><!--Fim row-->
    </div><!--Fim container-->




    

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/areaAluno.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>