<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <?php 
    /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.php');
        }
     
    $logado = $_SESSION['login'];
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Abigail 1.0</title>
    <link rel="icon" href="imagens/logop.png">
    <link rel="stylesheet" type="text/css" href="_css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
   
  <body>
      <!--Inicio da barra de navegação -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          
          <img src="imagens/logop.png" class="navbar-brand" href="#">
          <h1 class="titletop">Serviço de Saúde Dr.Cândido Ferreira</h1>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-2 sidenav">
          <ul class="nav nav-stacked">
            <li><a href="index2.php">Inicio</a></li>
            <li><a href="requisicao.php">Requisição</a></li>
            <li><a href="consulta.php">Consultas</a></li>
            <li><a href="#sessao3">Configurações</a></li>
          </ul>
        </div>

        <div class="col-sm-10">
          <div class="container">
            <h1>Bem Vindo ao Sistema de Requisição de Materias - SYSRM</h1>
          </div>  
        </div>
      </div>
    </div>


    <footer class="container-fluid">
      <p>Desenvolvedor Jonatas Ferreira</p>
    </footer>
  </body>
</html>