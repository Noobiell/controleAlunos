<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: ../../index.php?erro=2');
}

require_once('classeConexaoDb.php');

$id_usuario = $_SESSION['id_usuario'];

$banco = new db();
$conexao = $banco->conexaoDb();

$sql = "SELECT DATE_FORMAT(a.data_agendamento, '%d %b %Y') AS data_agendamento_formatada, a.id, a.nome, a.curso, a.professor, a.data_agendamento, a.hora FROM agendamentoreposicao as a JOIN cadastro_usuarios as c ON (a.id_usuario = c.id) WHERE id_usuario = $id_usuario";

$resultado = mysqli_query($conexao, $sql);

if($resultado){

    while($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

           echo '<div class="col-12 col-md-6" style="margin-bottom: 15px;">';
           echo ' <div class="card">';
           echo '<div class="card-body">';
           echo '<h5 class="card-title">Agendamento Reposição</h5>';
           echo '<div class="container-fluid">';
           echo '<div class="row">';
           echo '<div class="col-6">';
           echo '<p class="card-text"><b>Nome: </b>'.$registro['nome'].'</p>';
           echo '<p class="card-text"><b>Curso: </b>'.$registro['curso'].'</p>';
           echo '</div><!--Fim col-->';
           echo '<div class="col-6">';
           echo '<p class="card-text"><b>Professor: </b>'.$registro['professor'].'</p>';
           echo '<p class="card-text"><b>Data:</b> '.$registro['data_agendamento_formatada'].' / ' .$registro['hora'].' Horas</p>';
           echo '</div><!--Fim col-->';
           echo '</div><!--Fim row-->';
           echo '</div><!--Fim container-->';
           echo '<button id="excluir" onclick="removeAgendamentoReposicao('.$registro['id'].')" class="btn btn-danger" style="margin-top: 10px;">Excluir</button>';
           echo '</div><!--Fim card body-->';
           echo '</div><!--Fim card-->';
           echo '</div><!--Fim col-->';
    
    }

}else{
    echo 'Erro ao conectar com o banco de dados';
}



?>