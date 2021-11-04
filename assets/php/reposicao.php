<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=2');
    }

    require_once('classeConexaoDb.php');

    $id_usuario = $_SESSION['id_usuario'];
    $nome = $_SESSION['nome'];
    $curso = $_POST['curso'];
    $professor = $_POST['professor'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    $banco = new db();
    $conexao = $banco->conexaoDb();

    $sql = "INSERT INTO agendamentoreposicao(id_usuario, nome, curso, professor, data_agendamento, hora) VALUES('$id_usuario', '$nome', '$curso', '$professor', '$data', '$hora')";

    if(mysqli_query($conexao, $sql)){
        header('Location: ../../areaAluno.php?sucesso=3');
    }else{
        echo 'Erro ao se cadastrar';
    }

?>