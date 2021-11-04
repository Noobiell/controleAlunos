<?php 

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

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

				$('#btnEntrar').click(()=>{

					var campo_vazio = false;

					if($('#usuario').val() == ''){
						$('#usuario').css({'border-color': '#ff3333'});
						campo_vazio = true;
					}else{
						$('#campo_usuario').css({'border-color': '#ccc'});
					}

					if($('#senha').val() == ''){
						$('#senha').css({'border-color': '#ff3333'});
						campo_vazio = true;
					}else{
						$('#campo_senha').css({'border-color': '#ccc'});
					}

					if(campo_vazio) return false;

				});

			});
		</script>
    

    <title>Login - Digitação</title>
  </head>
  <body class="body">

    <?php 
    
    if($erro == 2){
        echo'<script> alert("Você precisa fazer login para ter acesso")</script>';
    }
    ?>
    
    <section id="tela-login">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src="assets/img/img-digitacao.svg" class="img-fluid img-inicio">
                </div><!--Fim col-->

                <div class="col-md-4 col-login">
                    <div class="container-login">
                        <a href="loginadm.php" class="txt-coordenacao">Coordenação</a>
                        <center><img src="assets/img/logo.png" width="100px"></center><br>
                        <form method="post" action="assets/php/login.php" id="login">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" autofocus>
    
                            <label>Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control">

                            <?php 
                            
                                if($erro == 1){
                                    echo '<span style="color: red; margin-left: 5px;">Usuario ou senha incorreto</span> <br>';
                                }
                            
                            ?>
    
                            <span class="cadastre-se">Ainda não possui uma conta? <a href="cadastro.php">Cadastre-se aqui</a></span> <br>
    
                            <button class="btn btn-entrar" type="submit" id="btnEntrar">Entrar</button>
                        </form>
                    </div><!--Fim container login-->                    
                </div><!--Fim col-->
            </div><!--Fim row-->
        </div><!--Fim container-->
    </section>

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