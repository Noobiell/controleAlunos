<?php 

session_start();

if(!isset($_SESSION['nome'])){
  header('Location: loginadm.php?erro=2');
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    

    <title>COORDENAÇÃO</title>
  </head>
  <body>

    <header>
      <div class="navbar navbar-expand-lg barra-nav">
        <div class="container">
          <a class="navbar-brand"><img src="assets/img/logo.png" width="50px"></a>

          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><span class="nav-link">Seja bem vindo, <?= $_SESSION['nome'] ?></span></li>
            <span class="separador-menu"></span>
            <li class="nav-item"><a class="nav-link" href="#">Digitação</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Palestra</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Reposição</a></li>
          </ul><!--Fim navbar nav-->


          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="meusagendamentos.php">Cadastrar Administrador</a></li>
            <li class="nav-item"><a class="nav-link" href="assets/php/sair.php">Sair</a></li>
          </ul><!--Fim navbar nav-->
        </div><!--Fim container-->
      </div><!--Fim barranav-->
    </header>

    <section id="procura">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Relatório Digitação</h2>
          </div><!--Fim col-->
        </div><!--Fim row-->
        <div class="row">
          <div class="col-11">
            <input type="serch" name="alunosdigitacao" id="alunosdigitacao" class="form-control" placeholder="Pesquise o aluno aqui!">
          </div><!--Fim col-->
          <div class="col-1">
            <button type="button" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
          </div>
        </div><!--Fim row-->
      </div><!--Fim container-->
    </section>

      <div class="container container-pesquisa">
        <div class="row">
          <div class="col-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sala</th>
                <th scope="col">Maquina</th>
                <th scope="col">Horario</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">01</th>
                <td>Gabriel de lima oliveira</td>
                <td>Sala 2</td>
                <td>Computador 12</td>
                <td>13 Horas</td>
                <td><button class="btn btn-danger">Editar</button></td>
              </tr>
            </tbody>
          </table>
          </div><!--Fim col-->
        </div><!--Fim row-->
      </div><!--Fim container-->

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>