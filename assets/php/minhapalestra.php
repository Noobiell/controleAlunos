<?php 
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: ../../index.php?erro=2');
    }

    require_once('classeConexaoDb.php');

    $id_usuario = $_SESSION['id_usuario'];

    $banco = new db();
    $conexao = $banco->conexaoDb();

    $sql = "SELECT a.id, a.nome, a.confirmacao FROM agendamentopalestra as a JOIN cadastro_usuarios as c ON (a.id_usuario = c.id) WHERE id_usuario = $id_usuario";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        while($registro = mysqli_fetch_array($resultado)){

            echo '<div class="col-12 col-md-5">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-12">';
            echo '<p class="card-text">Olá '.$registro['nome'].', Ficamos felizes em ter sua presença <b>Confirmada</b> na palestra nessa sexta feira! Caso haja algum imprevisto e precise cancelar, clique no botão abaixo:</p>';
            echo '</div><!--Fim col-->';
            echo '</div><!--Fim row-->';
            echo '</div><!--Fim container-->';
            echo '<button class="btn btn-danger" onclick="removeAgendamentoPalestra('.$registro['id'].')" style="margin-top: 10px; float: right;" type="button">Excluir</button>';
            echo '</div><!--Fim card body-->';
            echo '</div><!--Fim card-->';
            echo '</div><!--Fim col -->';
        }
    }else{
        echo 'Erro ao realizar consulta no banco';
    }

    

?>