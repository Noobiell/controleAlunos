<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=2');
    }

    require_once('classeConexaoDb.php');

    $confirmacao = isset($_POST['digitacao']) ? $_POST['digitacao'] : 'não';
    $id_usuario = $_SESSION['id_usuario'];
    $nome = $_SESSION['nome'];

    $banco = new db();
    $conexao = $banco->conexaoDb();

    $sql = "INSERT INTO agendamentopalestra(id_usuario, nome, confirmacao) VALUES('$id_usuario', '$nome', '$confirmacao')";

    $pesquisa = "SELECT id_usuario FROM agendamentopalestra WHERE id_usuario = $id_usuario";

    $consulta = mysqli_query($conexao, $pesquisa);

    $registros = mysqli_fetch_array($consulta);

    if($registros['id_usuario'] == $id_usuario){
        header("Location: ../../areaAluno.php?erro=1");
        die();
    }

    if(mysqli_query($conexao, $sql)){
        header('Location: ../../areaAluno.php?sucesso=2');
    }else{
        echo 'Erro no cadastro';
    }
    

?>