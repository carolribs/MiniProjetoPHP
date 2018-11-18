<?php

session_start();

include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$codigo = filter_input (INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$categoria_id = filter_input (INPUT_POST, 'categoria_id', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST,'descricao',FILTER_SANITIZE_STRING);
$valor_compra = filter_input (INPUT_POST,'valor_compra', FILTER_SANITIZE_NUMBER_FLOAT);
$valor_venda = filter_input (INPUT_POST, 'valor_venda', FILTER_SANITIZE_NUMBER_FLOAT);

//echo "id: $id <br>";
//echo "Produto: $produto <br>";
//echo "Código: $codigo <br>";
//echo "Categoria: $categoria_id <br>";
//echo "Descrição: $descricao <br>";
//echo "Valor da compra: $valor_compra <br>";
//echo "Valor da venda: $valor_venda <br>";


$result_usuario = "INSERT INTO db_produtos_php(produto, codigo, categoria_id, descricao, valor_compra, valor_venda) VALUES ('$produto','$codigo','$categoria_id' ,'$descricao','$valor_compra','$valor_venda')";

/* @var $resultado_usuario type */
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)){
$_SESSION['msg'] = "<p style = 'color: blue'> Produto cadastrado com sucesso!</p>";
    header("Location:index.php");
}else{
$_SESSION['msg'] = "<p style = 'color: red'> Produto não cadastrado!</p>";
    header("Location:index.php");
}