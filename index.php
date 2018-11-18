<!DOCTYPE html>
<?php
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro_Produtos</title>
    </head>
    
    
    <body>
        
        <fieldset>

       <center> <nav1 id = "menu1">
        <li><a href="TelaPrincipalPHP.php">Menu Inicial</a><br></li>
        <li><a href="ListarPHP.php">Listar</a><br></li>
        <li><a href="PesquisaPHP.php">Pesquisar</a><br></li>
        </nav1></center>
        <h1><center> Cadastro de produtos</center> </h1>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>

            <?php
        
        if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
        }

    ?>
        <form method ="POST" action="Processa.php">
            <p></p>
            
            

            <center><label>id:</label>
            <input name="id" placeholder=""></center><br></br>
            <fieldset><center> Produto 
            <input type="text" name="produto" placeholder="Digite o nome do produto"><br></br>
            </center></fieldset>
            <fieldset><center> Código 
            <input type ="number" name="codigo" placeholder="Digite o número do código"><br></br>
            </center></fieldset>
            <fieldset><center> Categoria 
            <input type="number" name="categoria_id" placeholder="Digite uma categoria"><br></br>
            </center></fieldset>
            <fieldset><center> Descrição 
            <input type="text" name="descricao" placeholder="Descrição do produto"><br></br>
            </center></fieldset>
            <fieldset><center> Valor da Compra 
            <input type="number" name="valor_compra" placeholder="R$: 0,00"><br></br>
            </center></fieldset>
            <fieldset><center> Valor da Venda 
            <input type="number" name="valor_venda" placeholder="R$: 0,00"><br></br>
            </center></fieldset>
            </nav1>
            <p></p>
            <input type="submit" value="Cadastrar"> 
            </fieldset>
        </form>
      
         
    
        
        
    </body>
</html>
