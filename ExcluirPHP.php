<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM db_produtos_php WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Produto excluido com sucesso</p>";
		header("Location: ListarPHP.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o produto não foi excluido com sucesso</p>";
		header("Location: ListarPHP.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um produto</p>";
	header("Location: index.php");
}
lude_once("conexao.php");