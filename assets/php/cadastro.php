<?php 

    require_once('classeConexaoDb.php');

    $nomeCompleto = $_POST['nome'];
    $curso = $_POST['curso'];
    $dataNascimento = $_POST['dataNascimento'];
    $usuario = $_POST['nomeUsuario'];
    $senha = md5($_POST['senha']);
    $confirmarSenha = $_POST['confirmarSenha'];

    $banco = new db();
    $conexaoBanco = $banco->conexaoDb();

    $usuario_existe = false;

    $consultaUsuario = "SELECT usuario FROM cadastro_usuarios WHERE usuario = '$usuario'";

    if($resultado_banco = mysqli_query($conexaoBanco, $consultaUsuario)){

        $dadosUsuario = mysqli_fetch_array($resultado_banco);

        if(isset($dadosUsuario['usuario'])){
            $usuario_existe = true;
        }

    }else{
        echo 'Erro de consulta no banco';
    }

    if($usuario_existe){
        header('Location: ../../cadastro.php?erroUsuario=1');
        die();
    }

    $cadastro = "insert into cadastro_usuarios(nome_completo, curso, data_nascimento, usuario, senha) values('$nomeCompleto', '$curso', '$dataNascimento', '$usuario', '$senha')";

    if(mysqli_query($conexaoBanco, $cadastro)){
        echo "
        <script>
        alert('Cadastro realizado com sucesso, seja bem vindo ' + '$nomeCompleto');
        window.location = '../../index.php';
        </script>
        ";
    }else{
        echo'Falha ao realizar cadastro';
    }


?>