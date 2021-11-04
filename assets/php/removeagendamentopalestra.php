<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: ../../index.php?erro=2');
    }

    require_once('classeConexaoDb.php');

    $id = $_GET['id'];

    $banco = new db();
    $conexao = $banco->conexaoDb();

    $sql = "DELETE FROM agendamentopalestra WHERE id = $id";

    if(mysqli_query($conexao, $sql)){
        echo 'Agendamento removido com sucesso';
    }else{
        echo 'Erro na conexão com o servidor';
    }
?>