<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        
        <title> Pesquisar produtos </title>
        
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="javascriptpersonalizado.js"></script>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>   
   
    </head>
    

    <body>
        <fieldset>
        <center><nav6 id = "menu6">
        <li><a href="TelaPrincipalPHP.php">Menu Inicial</a><br></li>
        <li><a href="index.php">Cadastrar</a><br></li>
        <li><a href="ListarPHP.php">Listar</a><br></li>
        </center></nav6>
        
        <h1><center> Pesquisar produtos</center> </h1>
        <form method ="POST " id = "forn-pesquisa" action ="" >
        
         <fieldset><legend> Pesquisar </legend>
             <input type="text" name="pesquisa" id = "pesquisa" placeholder="Digite aqui"> 
         <input type="submit" name = "pesquisar" value = "Pesquisar" >  
         </fieldset>
        </form>
     <ul class="resultado">
         </ul>
    </fieldset>
        </body>

</html>