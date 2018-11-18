<!DOCTYPE html>
<?php
session_start();

//include_once 'conexao.php';
include_once("conexao.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar_Produtos</title>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    </head>
    
    
    <body>
       
        
        
        <fieldset>
        <center><navlistar id = "menulistar">
        <li><a href="TelaPrincipalPHP.php">Menu Inicial</a><br></li>
        <li><a href="index.php">Cadastrar</a><br></li>
        <li><a href="PesquisaPHP.php">Pesquisar</a><br></li>
         </center></navlistar> 

            
           
            <center><h1> Produtos </h1></center>
        <?php
        
        if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
        }  
        
        $result_usuarios = "SELECT * FROM db_produtos_php";
        $resultado_usuarios = mysqli_query($conn, $result_usuarios);
        while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
            echo "Id:" . $row_usuario['id']. "<br>";
            echo "Produto:" . $row_usuario['produto']. "<br>";
            echo "Código:" . $row_usuario['codigo']. "<br>";
            echo "Categoria:" . $row_usuario['categoria_id']. "<br>";
            echo "Descrição:" . $row_usuario['descricao']. "<br>";
            echo "Valor da compra:" . $row_usuario['valor_compra']. "<br>";
            echo "Valor da venda:" . $row_usuario['valor_venda']."<br>";
            echo "<a href ='EditarPHP.php?id=" . $row_usuario['id']."'>Editar</a>"."<br></br>";
            echo "<a href ='ExcluirPHP.php?id=" . $row_usuario['id']."'>Excluir</a><hr>";
        }
        ?>
     
      
    </body>
</html>
