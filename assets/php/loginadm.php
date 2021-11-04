<?php 

session_start();

require_once('classeConexaoDb.php');


$email = $_POST['email'];
$senha = $_POST['senha'];

$banco = new db();
$conexao = $banco->conexaoDb();

$sql = "SELECT * FROM cadastro_adm WHERE email = '$email'";

if($resultado = mysqli_query($conexao, $sql)){

     $registro = mysqli_fetch_array($resultado);

     if($registro['email'] == $email  and $registro['senha'] == $senha){
         $_SESSION['nome'] = $registro['nome'];
         header('Location: ../../areaCoordenacao.php');
     }else{
         header('Location: ../../loginadm.php?erro=1');
     }
}else{
    echo 'Erro ao se conectar com o banco';
}

?>