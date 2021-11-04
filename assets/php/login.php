<?php 

session_start();

require_once('classeConexaoDb.php');

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$banco = new db();
$conexao = $banco->conexaoDb();

$sql = "SELECT id, nome_completo, usuario, senha FROM cadastro_usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);

$dadosUsuario = mysqli_fetch_array($resultado);

if(isset($dadosUsuario['usuario']) && $dadosUsuario['senha']){
    $_SESSION['id_usuario'] = $dadosUsuario['id'];
    $_SESSION['usuario'] = $dadosUsuario['usuario'];
    $_SESSION['nome'] = $dadosUsuario['nome_completo'];

    header('Location: ../../areaAluno.php');
}else{
    header('Location: ../../index.php?erro=1');
}

?>