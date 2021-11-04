<?php 
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: ../../index.php?erro=2');
    }

    require_once('classeConexaoDb.php');

    $sala = $_POST['sala'];
    $maquina = $_POST['maquina'];
    $horario = $_POST['horario'];
    $id_usuario = $_SESSION['id_usuario'];
    $nome = $_SESSION['nome'];

    $banco = new db();
    $conexao = $banco->conexaoDb();

    $sql = "INSERT INTO agendamentodigitacao(id_usuario, nome, sala, maquina, horario) VALUES('$id_usuario', '$nome', '$sala', '$maquina', '$horario')";

    if(mysqli_query($conexao, $sql)){
        header('Location: ../../areaAluno.php?sucesso=1');
    }else{
        echo 'Erro ao fazer cadastro';
    }

?>