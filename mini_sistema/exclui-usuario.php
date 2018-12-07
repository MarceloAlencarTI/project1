<?php 

require "includes/connection.php";

$id = $_GET['id'];

$sql_deleta_usuario = "DELETE FROM usuario WHERE id = {$id}";

try{

	$conexao->query($sql_deleta_usuario);
    $msg = "Usuário deletado com sucesso!";
	$tipo_msg = "sucess";

	header("Location: usuarios.php?msg={$msg}&tipo_msg={$tipo_msg}");

} catch (Excption $e){
	$msg = "Não foi possível excluir! Erro: {$e->getMessage()}";
	$tipo_msg = "danger";

	header("Location: usuarios.php?msg={$msg}&tipo_msg{$tipo_msg}");
}

 ?>