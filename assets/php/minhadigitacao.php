<?php 
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: ../../index.php?erro=2');
    }

    require_once('classeConexaoDb.php');

    $id_usuario = $_SESSION['id_usuario'];

    $banco = new db();
    $conexao = $banco->conexaoDb();

    $sql = "SELECT d.id, d.nome, d.sala, d.maquina, d.horario FROM agendamentodigitacao as d JOIN cadastro_usuarios as c ON (d.id_usuario = c.id) WHERE id_usuario = '$id_usuario'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        while($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
           echo '<div class="col-12 col-md-6" style="margin-bottom: 15px;">';
           echo ' <div class="card">';
           echo '<div class="card-body">';
           echo '<h5 class="card-title">Agendamento Digitação</h5>';
           echo '<div class="container-fluid">';
           echo '<div class="row">';
           echo '<div class="col-6">';
           echo '<p class="card-text"><b>Nome: </b>'.$registro['nome'].'</p>';
           echo '<p class="card-text"><b>Sala: </b>'.$registro['sala'].'</p>';
           echo '</div><!--Fim col-->';
           echo '<div class="col-6">';
           echo '<p class="card-text"><b>Máquina:</b> Computador '.$registro['maquina'].'</p>';
           echo '<p class="card-text"><b>Horario:</b> '.$registro['horario'].' Horas</p>';
           echo '</div><!--Fim col-->';
           echo '</div><!--Fim row-->';
           echo '</div><!--Fim container-->';
           echo '<button id="excluir" onclick="removeAgendamentoDigitacao('.$registro['id'].')" class="btn btn-danger" style="margin-top: 10px;">Excluir</button>';
           echo '</div><!--Fim card body-->';
           echo '</div><!--Fim card-->';
           echo '</div><!--Fim col-->';
        }
    }else{
        echo 'Erro na consulta';
    }
?>