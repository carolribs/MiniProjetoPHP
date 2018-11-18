<!DOCTYPE html>
<?php
session_start();
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
            echo $row_usuario['id'];
        }
        ?>
     
      
    </body>
</html>
