<?php

#chama o arquivo de configuração com o banco
require 'bd/produtosbd.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Abigail 1.0</title>
    <link rel="icon" href="imagens/logop.png">
    <link rel="stylesheet" type="text/css" href="_css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
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
            <h2>Requisição de Materias</h2>
            <p></p> 

            <table id="products-table" class="table table-condensed">
              <thead>
                <tr>
                  <th class="cabecalho">Código</th>
                  <th class="cabecalho">Nome do Produto</th>
                  <th class="cabecalho">Und<br/>Medida</th>
                  <th class="cabecalho">Qtd <br/>Solicitada</th>
                  <th class="cabecalho">Remover</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <input class="cod" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <select name="produtos" class="produtos">
                      <option>Selecione o Produto</option>
                        <?php while($prod = mysqli_fetch_array($query)) { ?>
                          <option value="<?php echo $prod['COD_PRODUTO'] ?>"><?php echo $prod['NOME']?></option>
                        <?php } ?>
                    </select> 
                  </td>
                  <td>
                    <input class="unid" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <input class="qtd" type="number" name="quantity" value="&nbsp;" min="0" max="200">
                  </td>
                  <td><button onclick="RemoveTableRow(this)" type="button" class="glyphicon glyphicon-minus-sign img-circle btn-icon"></button></td>
                </tr> 

                 <tr>
                  <td>
                    <input class="cod" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <select name="produtos" class="produtos">
                      <option>Selecione o Produto</option>
                    </select> 
                  </td>
                  <td>
                    <input class="unid" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <input class="qtd" type="number" name="quantity" value="&nbsp;" min="0" max="200">
                  </td>
                  <td><button onclick="RemoveTableRow(this)" type="button" class="glyphicon glyphicon-minus-sign img-circle btn-icon"></button></td>
                </tr> 

                 <tr>
                  <td>
                    <input class="cod" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <select name="produtos" class="produtos">
                      <option>Selecione o Produto</option>
                    </select> 
                  </td>
                  <td>
                    <input class="unid" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <input class="qtd" type="number" name="quantity" value="&nbsp;" min="0" max="200">
                  </td>
                  <td><button onclick="RemoveTableRow(this)" type="button" class="glyphicon glyphicon-minus-sign img-circle btn-icon"></button></td>
                </tr> 

                 <tr>
                  <td>
                    <input class="cod" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <select name="produtos" class="produtos">
                      <option>Selecione o Produto</option>
                    </select> 
                  </td>
                  <td>
                    <input class="unid" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <input class="qtd" type="number" name="quantity" value="&nbsp;" min="0" max="200">
                  </td>
                  <td><button onclick="RemoveTableRow(this)" type="button" class="glyphicon glyphicon-minus-sign img-circle btn-icon"></button></td>
                </tr> 

                 <tr>
                  <td>
                    <input class="cod" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <select name="produtos" class="produtos">
                      <option>Selecione o Produto</option>
                    </select> 
                  </td>
                  <td>
                    <input class="unid" type="text" readonly="true" name="codigo" value="&nbsp;">
                  </td>
                  <td>
                    <input class="qtd" type="number" name="quantity" value="&nbsp;" min="0" max="200">
                  </td>
                  <td><button onclick="RemoveTableRow(this)" type="button" class="glyphicon glyphicon-minus-sign img-circle btn-icon"></button></td>
                </tr> 
                
              </tbody>
            </table>
              <!--Botões-->
            <div>
              <button onclick="AddTableRow(this)" type="button" class="glyphicon glyphicon-plus-sign img-circle btn-icon"></button>
              
              <button onclick="" type="button" class="glyphicon glyphicon-remove-sign img-circle btn-icon"></button>
              <button onclick="" type="button" class="glyphicon glyphicon-ok-sign img-circle btn-icon"></button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer class="container-fluid">
      <p>Desenvolvedor Jonatas Ferreira</p>
    </footer>
  </body>
</html>