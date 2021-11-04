<?php

$erroUsuario = isset($_GET['erroUsuario']) ? $_GET['erroUsuario'] : 0;


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

    <script>

        $(document).ready(()=>{

            $("#salvar").click(()=>{

                var senhas = false;

                if($('#senha').val() != $('#confirmarSenha').val()){
                    $('#senha').css({'border-color': '#ff3333'});
                    $('#confirmarSenha').css({'border-color': '#ff3333'});
                    $('#alertaSenha').show();
                    senhas = true;
                }else{
                    senhas = false;
                }

                if(senhas) return false;

            })

        });

    </script>

    <title>Cadastro - Digitação</title>
  </head>
  <body>
    <header class="container">
        <div class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-chevron-left"></i> Voltar</a>
                </li>
            </ul>
        </div>
    </header>


    <section id="cadastro">
        
        <div class="container container-cadastro">
            <h1>CADASTRE-SE AQUI</h1>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="assets/php/cadastro.php">
                        <div class="container-fluid" style="text-align: left;">
                            <div class="row">
                                <div class="col-12">
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" name="nome" id="nome" class="form-control" autofocus required>
                                </div><!--Fim col-->
                            </div><!--Fim row-->

                            <div class="row">
                                <div class="col-6">
                                    <label for="curso">Curso</label>
                                    <input type="text" name="curso" id="curso" class="form-control">
                                </div><!--Fim col-->

                                <div class="col-6">
                                    <label for="dataNascimento">Data de Nascimento</label>
                                    <input type="date" name="dataNascimento" id="dataNascimento" class="form-control">
                                </div><!--Fim col-->
                            </div><!--Fim row-->

                            <div class="row">
                                <div class="col-12">
                                    <label for="nomeUsuario">Nome de Usuario</label>
                                    <input type="text" name="nomeUsuario" id="nomeUsuario" class="form-control" required>
                                    <?php 
                                    
                                        if($erroUsuario){
                                            echo "<span style='font-size: 14px; color: #FF0000;'>Usuario ja cadastrado, escolha outro nome de usuario";
                                        }

                                    ?>
                                </div><!--Fim col-->
                            </div><!--Fim row-->

                            <div class="row">
                                <div class="col-6">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" id="senha" class="form-control" required>
                                    <span style="font-size: 14px; background: #66ccff; padding: 1px; display: none;" id="alertaSenha">Confirmação de senha incorreta</span>
                                </div><!--Fim col-->

                                <div class="col-6">
                                    <label for="confirmarSenha">Confirmar Senha</label>
                                    <input type="password" name="confirmarSenha" id="confirmarSenha" class="form-control" required>                                    
                                </div><!--Fim col-->
                            </div><!--Fim row-->

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-cadastrar" id="salvar">Salvar</button>
                                </div><!--Fim col-->
                            </div><!--Fim row-->
                        </div><!--Fim container-->
                    </form>                   
                </div><!--Fim col-->
                <div class="col-md-6">
                    <img src="assets/img/img-cadastro.svg" class="img-fluid img-inicio">
                </div><!--Fim col-->
            </div><!--Fim row-->
        </div><!--Fim container-->
    </section>
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>