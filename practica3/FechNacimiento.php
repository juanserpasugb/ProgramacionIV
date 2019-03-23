<!DOCTYPE html>


</html>


  <head>
    <meta charset="utf-8">
    <title>Calcular fecha</title>

    <style>

    .Formulario{
      text-align: center;
    }





    </style>

  </head>

  <body>

    <ul>

      <li><a href="index.php">Regresar al menú</a></li>


    </ul>


    <div class ="Formulario">

       <form action="" method="POST">


         <label for="edad">Edad</label>
         <br>
         <input type="number" name="edad" required>
         <br>
         <input type="submit" value="Comprobar"  name="Check">

       </form>





    </div>





  </body>





</html>

<?php


if(isset($_POST['Check'])){

  $Edad = $_POST['edad'];
  if($Edad >= 18){

    $Mes = $Edad * 12;
    $Dias = $Edad * 365;

    echo "Su edad es ".$Edad."<br/> meses que tienes ".$Mes."<br/> Dias que tienes ".$Dias;



  }else{
    echo "Eres menor de edad";
  }






 }








 ?>
