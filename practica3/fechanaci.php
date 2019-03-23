<!DOCTYPE html>


</html>



  <head>
   
    <title>Calcular fecha</title>
</head>




<div class ="Formulario">

       <form action="" method="POST">


         <label for="edad">Edad</label>
         <br>
         <input type="number" name="edad" required>
         <br>
         <input type="submit" value="Comprobar"  name="Check">




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

       </form>




  </body>





</html>




