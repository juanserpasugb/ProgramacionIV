<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabla condicional</title>
  </head>
  <body>
    <h1>Tabla condicional</h1>
    <?php
        function muestra($valor){
          if($valor < 0.5)
          $color = "red";
          else
          $color = "blue";
          echo "<td><font color='$color'>$valor</font></td>\n";
        }
     ?>
     <table border="1">
       <?php
          for($x=0; $x<=2; $x+=0.01){
            echo "<tr>";
            muestra($x);
            muestra(sin($x));
            muestra(cos($x));
            echo "</tr>";
          }
       ?>
     </table>
  </body>
</html>
