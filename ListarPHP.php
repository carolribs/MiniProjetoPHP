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
    </head>
    
    
    <body>
        <fieldset>
        <h1> Listar Produtos </h1>
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
            echo "Valor da venda:" . $row_usuario['valor_venda']. "<hr>";
           
        }
        ?>
     
      
    </body>
</html>
