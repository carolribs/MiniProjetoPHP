<?php

session_start();
// inclui a conexao com o banco de dados 
include_once('conexao.php');

//recuperar o valor da palavra

$produto = $_POST['palavra'];

//Pesquisar no banco de dados nome do produto referente a palavra digitada pelo usuário
$produto = "SELECT * FROM db_produtos_php WHERE produto LIKE '%$produto%'";
$resultado_produtos = mysqli_query($conn, $produto);
	
if(mysqli_num_rows($resultado_produtos) <= 0){
    echo "Nenhum produto encontrado...";
    }else{
while($rows = mysqli_fetch_assoc($resultado_produtos)){
    echo "<li>".$rows['produto']."</li>";
   }
}
?>