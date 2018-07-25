<?php 

// session_start inicia a sessão
session_start();

$servername = "localhost";
$username = "root";
$password = "";
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
// Create connection
$conn = mysqli_connect($servername, $username, $password) or die ("Sem conexão com o servidor");
$select = mysqli_select_db($conn,"ALMOX") or die("Sem acesso ao DB, Entre em contato com o Administrador, jonatas.ferreira@candido.org.br");

mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET character_set_connection=utf8');
mysqli_query($conn,'SET character_set_client=utf8');
mysqli_query($conn,'SET character_set_results=utf8');

#seleciona os dados da tabela produto
$query = mysqli_query($conn,"SELECT COD_PRODUTO, NOME, UNIDADE FROM PRODUTOS");

?>

