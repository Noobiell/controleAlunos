<?php 

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

if($erro == 1){
    echo '<script>alert("Você não tem acesso a essa página")</script>';
}

if($erro == 2){
    echo '<script>alert("Você precisa fazer login para ter acesso!")</script>';
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

    <!--FONTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">

    <script>

        $(document).ready(()=>{

            $("#entrar").click(()=>{
                var campo_vazio = false;

                if($("#email").val() == ''){
                    $("#email").css({'border-color': '#ff3333'});
                    campo_vazio = true;
                }else{
                    $("#email").css({'border-color': '#ccc'});
                }
                if($("#senha").val() == ''){
                    $("#senha").css({'border-color': '#ff3333'});
                    campo_vazio = true;
                }else{
                    $("#senha").css({'border-color': '#ccc'});
                }

                if(campo_vazio) return false;
            });

        });


    </script>
    

    <title>LOGIN - COORDENAÇÃO</title>
  </head>
  <body class="body">
    <header class="container fixed-top">
        <div class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-chevron-left"></i> Voltar</a>
                </li>
            </ul>
        </div>
    </header>

   
    <div class="container-adm">
        <div class="container-fluid">
            <form method="POST" action="assets/php/loginadm.php">
                <div class="row">
                    <div class="col-3">
                        <img src="assets/img/logo.png" class="img-fluid">
                    </div><!--Fim col-->

                    <div class="col-9" style="margin-top: 10px;">
                        <h2 class="titulo">ADMINISTRAÇÃO</h2>
                    </div><!--Fim col-->

                </div><!--Fim row-->

                <div class="row separador-formulario">  
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div><!--Fim col-->
                </div><!--Fim row-->

                <div class="row">  
                    <div class="col-12">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div><!--Fim col-->
                </div><!--Fim row-->

                <div class="row separador-formulario">
                    <div class="col-12">
                        <button type="submit" id="entrar" class="btn btn-danger" style="float: right;">Entrar</button>
                    </div><!--Fim col-->
                </div><!--Fim row-->

            </form>
        </div><!--Fim container fluid-->
    </div><!--Fim container login adm-->
    

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