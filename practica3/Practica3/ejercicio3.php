<!DOCTYPE html>

<html>

  <head>
  
  
  </head>
  <title>
  Datos en tabla
  </title>
  <body>
  <align><center>
     
<form name="datos" method="POST" action="">
      
      <label for="nombre">Nombre:</label><br>
      <input type="text" name="nombres"
        size="30" maxlength="30" pattern="[A-Za-z]{3,30}"
        required
        placeholder="Escriba su nombre"><br>

      <label for="apellido">Apellidos:</label><br>
      <input type="text" name="apellidos"
        size="30" maxlength="30" pattern="[A-Za-z]{5,30}"
        required 
        placeholder="Escriba sus apellidos"><br>

        <label for="Departamento">Departamento:</label><br>
      <input type="text" name="Departamento"
        size="30" maxlength="30" required
        placeholder="Escriba su Departamento"><br>

         <label for="PAIS">PAIS origen:</label><br>
      <input type="text" name="pais"
        size="30" maxlength="30" 
        placeholder="Escriba su pais de origen"><br>
      
      <label for="Telefono">Numero Telefonico:</label><br>
        <input type="number" name="telefono"
        size="30" maxlength="30"
        placeholder="Escriba su numero telefonico"><br>
      
      <label for="eda">Edad:</label><br>
        <input type="number" name="Edad"
        size="30" maxlength="30" required
        placeholder="Digite su Edad"><br>
      
     <label for="codigo">Codigo estudiante:</label><br>
        <input type="text" name="codigo"
        size="30" maxlength="30" required
        placeholder="Digite su codigo"><br>
      
      
      <input type="submit"  name="Procesar" value="procesar">
           <input type="reset" name="limpiar" value="limpiar">
    </form>


<?php   
  if($_POST) {
        //campos del formulario
        $nombre= $_POST['nombres'];
        $apellido= $_POST['apellidos'];
          $Departamento=$_POST['Departamento'];
          $PAIS=$_POST['pais'];
        $Telefono=$_POST['telefono'];
        $eda=$_POST['Edad'];
         $codigo=$_POST['codigo'];

 }
        ?>
      
 <h1 align="center">TABLA REGISTRO</h1>
      <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Departamento</td>
        <td>País</td>
        <td>Telefono</td>
        <td>Edad</td>
         <td>Codigo EST.</td>
    </tr>



    <tr align="center">
      <td><?php echo"$nombre";?></td>
      <td><?php echo"$apellido";?></td>
      <td><?php echo"$Departamento";?></td>
      <td><?php echo"$PAIS";?></td>
      <td><?php echo"$Telefono";?></td>
      <td><?php echo"$eda";?></td>
      <td><?php echo"$codigo";?></td>

 </tr>
 </table>
    
  </body>
  <footer>
  </footer>
  
</html>