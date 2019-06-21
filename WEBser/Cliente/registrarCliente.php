<?php
include "conws.php";
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

    <h2><b>Registro de Clientes</b></h2>

    <form  method="POST"action ="" role="form">
    
            <div class="form-group col-md-4">
            <td><label for="inputName"> ID </label> </td>
            <td><input type="text" class="form-control" name="codigo" placeholder="codigo"required></td></tr>
            </div>
            <div class="form-group col-md-4">
            <td><label for="inputName"> Nombres </label> </td>
            <td><input type="text" class="form-control" name="nombres" placeholder="Nombres"required></td></tr>
            </div>
            <div class="form-group col-md-4">
            <td><label for="inputName"> Apellidos </label> </td>
            <td><input type="text" class="form-control" name="apellidos" placeholder="Apellidos"required></td></tr>
            </div>
            <div class="form-group col-md-4">
            <td><label for="inputName"> Sexo </label> </td>
            <td><input type="text" class="form-control" name="sexo" placeholder="Sexo"required></td></tr>
            </div>
            <div class="form-group col-md-4">
            <td><label for="inputName"> Edad </label> </td>
            <td><input type="number" class="form-control"name="edad" placeholder="Edad"required></td></tr>
            </div>
            <div class="form-group col-md-4">
            <td><label for="inputName"> Direccion </label> </td>
            <td><input type="text" class="form-control" name="direccion" placeholder="Direccion"required></td></tr>
            </div>
            <div class="form-group col-md-4">
            <td><label for="inputName"> Dui </label> </td>
            <td><input type="text" class="form-control"name="dui" placeholder="DUI"required></td></tr>
            </div>    
        </tr>
            <td colspan="2">
                <button type="submit"  class="btn btn-primary "id="enviar" name="enviar">
                    Guardar
                    </button>
                    </div>
                </td>
             </tr>
        </table >
    </form>
    </body>
</html>
<?php

//evualuacion por metodo post

if(isset($_POST['enviar'])){
    $codigo = $_POST['codigo'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $dui = $_POST['dui'];

    //paramaetros q recibira el metodo nuevoCliente
    $parametros = array ('id_Cliente'=>$codigo , 'Nombres'=>$nombres, 'Apellidos'=>$apellidos, 'Sexo'=>$sexo , 
    'Edad'=>$edad, 'Direccion'=>$direccion, 'Dui'=>$dui);

    //llmado al metodo nuevoCliente
    $result = $client->call('nuevoCliente', $parametros);

    if ($result ){
                echo "<script language='JavaScript'>
                alert('El cliente ha sido registrado con exito');
                window.open('Icliente.php', '_self');
                </script>";

        
    }else {
        echo "no se ha podido registrar el alumno";
    }
}