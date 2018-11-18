<!DOCTYPE html>
<?php
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    
    
    <body>
        <fieldset>
        <h1>Cadastro de produtos</h1>
        <?php
        
        if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
        }        
        ?>
        

        <form method ="POST" action="Processa.php">
            <p></p>
            
            <label>id:</label>
            <input name="id" placeholder=""><br></br>
            <fieldset><legend> Produto </legend>
            <input type="text" name="produto" placeholder="Digite o nome do produto"><br></br>
            </fieldset>
            <fieldset><legend> Código </legend>
            <input type ="number" name="codigo" placeholder="Digite o número do código"><br></br>
            </fieldset>
            <fieldset><legend> Categoria </legend>
            <input type="number" name="categoria_id" placeholder="Digite uma categoria"><br></br>
            </fieldset>
            <fieldset><legend> Descrição </legend>
            <input type="text" name="descricao" placeholder="Descrição do produto"><br></br>
            </fieldset>
            <fieldset><legend> Valor da Compra </legend>
            <input type="number" name="valor_compra" placeholder="R$: 0,00"><br></br>
            </fieldset>
            <fieldset><legend> Valor da Venda </legend>
            <input type="number" name="valor_venda" placeholder="R$: 0,00"><br></br>
            </fieldset>
            
            <p></p>
            <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
      
         
    
        
        
    </body>
</html>
