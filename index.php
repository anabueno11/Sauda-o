<?php
  include("classe/conexao.php");
  $cons = "SELECT * FROM banco1";
  $con = $mysqli->query($cons) or die ($mysqli->error);
?>
<html>
  <head>
    <meta charset ="utf8">
    <title> Olá, Mundo! </title>
  </head>
  <body>
    <font face = "Verdana">
      <center>
        <table border = "2" bordercolor = "red">
          <tr>
            <td>id</td>
            <td>Saudação</td>
          </tr>
          <?php while($dados = $con->fetch_array()){?>
          <tr>
            <td>1</td>
            <td>Olá, Mundo</td>
          <?php } ?>
        </table>
      </center>
    </font>
  </body>
</html>