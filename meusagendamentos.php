<?php

  session_start();

  if(!isset($_SESSION['usuario'])){
    header('Location: index.php?erro=2');
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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- ICONES -->
    <link rel="icon" href="assets/img/favicon-microlins.png">

    <script>
      $(document).ready(()=>{

         function atualizaDigitacao(){

          $.ajax({

            url: "assets/php/minhadigitacao.php",
            success: function(data){
              $('#agendamento_digitacao').html(data);
            }

          });
        }
        atualizaDigitacao();

        function atualizaPalestra(){

          $.ajax({

            url: 'assets/php/minhapalestra.php',
            success: function(data){
              $("#agendamento_palestra").html(data);
            }

          });
        }

        atualizaPalestra();

        function atualizaReposicao(){
          $.ajax({
            url: 'assets/php/minhareposicao.php',
            success: function(data){
              $("#agendamento_reposicao").html(data);
              
            }
          });
        }

        atualizaReposicao();
      });

      

        
    </script>

    <title>Meus agendamentos</title>
  </head>
  <body style="padding-top: 120px;">
    
    <header>
        <div class="navbar navbar-expand-lg barra-nav fixed-top">
          <div class="container">
            <a class="navbar-brand"><img src="assets/img/logo.png" width="50px"></a>
  
            <ul class="navbar-nav">
  
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="opcoesDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seja bem vindo, <?= $_SESSION['nome'] ?></a> 
  
                <div class="dropdown-menu" aria-labelledby="opcoesDrop">
                  <a class="dropdown-item" href="areaAluno.php">Início</a>
                  <a class="dropdown-item" href="assets/php/sair.php">Sair</a>
                </div>
              </li>
            </ul><!--Fim navbar nav-->
          </div><!--Fim container-->
        </div><!--Fim barranav-->
      </header>


      <div class="container">

        <ul class="nav nav-tabs" id="agendamentos" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="digitacao-tab" data-toggle="tab" href="#digitacao" role="tab" aria-controls="digitacao" aria-selected="true">Digitação</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="palestra-tab" data-toggle="tab" href="#palestra" role="tab" aria-controls="palestra" aria-selected="false">Palestra</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="reposicao-tab" data-toggle="tab" href="#reposicao" role="tab" aria-controls="reposicao" aria-selected="false">Reposição</a>
            </li>
          </ul>

          <div class="tab-content" id="panel-agendamentos">
            <div class="tab-pane fade show active" id="digitacao" role="digitacao" aria-labelledby="digitacao-tab">
              <div class="container-fluid">
                <div class="row" id="agendamento_digitacao">
                  
                </div><!--Fim row-->
              </div><!--Fim container-->
            </div><!--Fim painel digitação-->

            <div class="tab-pane fade" id="palestra" role="palestra" aria-labelledby="palestra-tab">
              <div class="container-fluid">
                <div class="row" id="agendamento_palestra">
                  
                </div><!--Fim row -->
              </div><!--Fim container -->
            </div><!--Agendamento palestra-->
            <div class="tab-pane fade" id="reposicao" role="reposicao" aria-labelledby="reposicao-tab">
            <div class="container-fluid">
                <div class="row" id="agendamento_reposicao">

                </div>
              </div>
            </div>
          </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->
      <script>
        function removeAgendamentoDigitacao(elemento){

          $.ajax({

            url: 'assets/php/removeagendamentodigitacao.php?id='+elemento,
            success: function(data){
              alert(data);
              document.location.reload(true);
            }

          });
          }

          function removeAgendamentoPalestra(elemento){

              $.ajax({

                url: 'assets/php/removeagendamentopalestra.php?id='+elemento,
                success: function(data){
                  alert(data);
                  document.location.reload(true);
                }

              });
          }

          function removeAgendamentoReposicao(elemento){

            $.ajax({

              url: 'assets/php/removeagendamentoreposicao.php?id='+elemento,
              success: function(data){
                alert(data);
                document.location.reload(true);
              }

            });
          }
      </script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>