<?php

include 'conws.php';
if(isset($_GET)){
    $codigo = $_GET['codigo'];
    $param = array(
        'codigo'=>$codigo
    );
    $result=$client->call('buscarcliente',$param);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        include 'Nav.html';
    ?>
        <h2><b>Actualizar cliente</b></h2>

        <form method="POST" action="">
        
                 <div class="form-group col-md-4">
                    <td><label for="id">id </label></td>
                    <td><input type="text" class="form-control" name="id" id="id" value='<?php if(isset($_GET['codigo'])){echo $result['cliente'][0]['id_Cliente'];} ?>'></td>
                 </div>

                 <div class="form-group col-md-4">
                    <td><label for="Nombres">Nombre</label></td>
                    <td><input type="text" class="form-control" name="nombres" id="nombres" value='<?php if(isset($_GET['codigo'])){echo $result['cliente'][0]['Nombres'];} ?>'></td>
                </div>

                <div class="form-group col-md-4">  
                    <td><label for="Apellidos">Apellidos</label></td>
                     <td><input type="text" class="form-control" name="Apellidos" id="Apellidos" value='<?php if(isset($_GET['codigo'])){echo $result['cliente'][0]['Apellidos'];} ?>'></td>
                </div>
                    
                <div class="form-group col-md-4">
                    <td><label for="Sexo">Sexo</label></td>           
                    <td><input type="text" class="form-control" name="Sexo" id="Sexo" value='<?php if(isset($_GET['codigo'])){echo $result['cliente'][0]['Sexo'];} ?>'></td>
                 </div>   
                   
                 <div class="form-group col-md-4">
                    <td><label for="Edad">Edad</label></td>                 
                    <td><input type="number" class="form-control" name="Edad" id="Edad" value='<?php if(isset($_GET['codigo'])){echo $result['cliente'][0]['Edad'];} ?>'></td>
                 </div>
                    
                 <div class="form-group col-md-4">
                    <td><label for="Direccion">Direccion</label></td>                   
                    <td><input type="text" class="form-control" name="Direccion" id="Direccion" value='<?php if(isset($_GET['codigo'])){echo $result['cliente'][0]['Direccion'];} ?>'></td>
                  </div> 
                   
                  <div class="form-group col-md-4">
                    <td><label for="Dui">Dui</label></td>
                    <td><input type="text" name="Dui" id="Dui" value='<?php if(isset($_GET['codigo'])){echo $result['cliente'][0]['Dui'];} ?>'></td>
                    </div>


                    <td colspan="2">
                        <button type="submit" class="btn btn-primary "id="enviar" name="enviar">Guardar Cambios</button>
                        </div>

                    </td>
                  
                
            
        </form>
</body>
</html>

<?php

if(isset($_POST['enviar'])){
    $id_Cliente = $codigo;
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['Apellidos'];
    $sexo = $_POST['Sexo'];
    $edad = $_POST['Edad'];
    $direccion = $_POST['Direccion'];
    $dui = $_POST['Dui'];


    $parametros = array (
        'id_Cliente'=>$id_Cliente,
        'Nombres'=>$nombres, 
        'Apellidos'=>$apellidos,
         'Sexo'=>$sexo , 
        'Edad'=>$edad, 
        'Direccion'=>$direccion, 
         'Dui'=>$dui);

        $result = $client->call('actualizarcliente',$parametros);
        if($result){
            echo "<script language='JavaScript'>
                alert('Cambios guardados');
                window.open('Icliente.php','_self');
                </script>";
        }else{
            echo "Error en actualizar";
        }

}
?>
