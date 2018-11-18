<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "db_produto";

//criar conexão

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);
