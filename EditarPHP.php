<?php
session_start();
include_once("conexao.php");


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "SELECT * FROM db_produtos_php WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Editar cadastro </title>		
	</head>
	<body>
            <fieldset>
           <center><nav8 id = "menu8">
            <li><a href="TelaPrincipalPHP.php">Menu Inicial</a></li>
            <li><a href="index.php">Cadastrar</a></li>
            <li><a href="ListarPHP.php">Listar</a></li>
            <li><a href="PesquisaPHP.php">Pesquisar</a></li>
            <center><nav8/>
                
                
                <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
                <center><h1>Editar Produto</h1></center>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
                <form method="POST" action="Processa_editarPHP.php">
            <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
	
            <fieldset><legend> Produto </legend>
            <input type="text" name="produto" placeholder="Digite o nome do produto" value="<?php echo $row_usuario['produto']; ?>"><br><br>
            </fieldset>
            <fieldset><legend> Código </legend>
            <input type ="number" name="codigo" placeholder="Digite o número do código" value="<?php echo $row_usuario['codigo']; ?>"><br><br>
            </fieldset>
            <fieldset><legend> Categoria </legend>
            <input type="number" name="categoria_id" placeholder="Digite uma categoria" value="<?php echo $row_usuario['categoria']; ?>"><br><br>
            </fieldset>
            <fieldset><legend> Descrição </legend>
            <input type="text" name="descricao" placeholder="Descrição do produto" value="<?php echo $row_usuario['descricao']; ?>"><br><br>
            </fieldset>
            <fieldset><legend> Valor da Compra </legend>
            <input type="number" name="valor_compra" placeholder="R$: 0,00" value="<?php echo $row_usuario['valor_compra']; ?>"><br><br>
            </fieldset>
            <fieldset><legend> Valor da Venda </legend>
            <input type="number" name="valor_venda" placeholder="R$: 0,00" value="<?php echo $row_usuario['valor_venda']; ?>"><br><br>
            </fieldset>
            <br></br>	
            <input type="submit" value="Salvar alterações">
            </fieldset>
		</form>
	</body>
</html>