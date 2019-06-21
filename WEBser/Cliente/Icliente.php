<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php
        include 'Nav.html';
    ?>
</body>
</html>

<?php
//conexion servicio web
include "conws.php";

//llamado metodo listarcliente
$result=$client->call('listarcliente');
if ($client->fault)  {
        echo 'Fallo';
        print_r ($result);

} else {
    $err = $client->
    getError ();
    if ($err) {
        echo 'Error' . $err ;
    } else {
        $columnas = count ($result['cliente']);


        //imprime tabla para mostrar registros de la bd
        echo "<br/>";
            echo"<center>
            <div>
                <h2>Listado de Clientes</h2>
                <table class='table table-bordered col-md-8'>
                <tr>
                    <th>Editar</th>
                    <th> ID</th>
                    <th> Nombres</th>
                    <th> Apellidos</th>
                    <th> Sexo</th>
                    <th> Edad</th>
                    <th> Direccion</th>
                    <th> Dui</th>
                    </tr>
                    ";

            
            for($i=0; $i<$columnas; $i++) {
                $codigo = $result['cliente'][$i]['id_Cliente'];
                echo "<tr>";
                echo "<td style='width:20px'><a href='actualizacliente.php?codigo=$codigo' style='color:#2E64FE'>Editar</a></td>";
                
                echo "<td>". $result ['cliente'] [$i] ['id_Cliente']. "</td>";
                echo "<td>". $result ['cliente'] [$i] ['Nombres']. "</td>";
                echo "<td>". $result ['cliente'] [$i] ['Apellidos']. "</td>";
                echo "<td>". $result ['cliente'] [$i] ['Sexo']. "</td>";
                echo "<td>". $result ['cliente'] [$i] ['Edad']. "</td>";
                echo "<td>". $result ['cliente'] [$i] ['Direccion']. "</td>";
                echo "<td>". $result ['cliente'] [$i] ['Dui']. "</td>";


            }

            echo "
            </tr>
            </table>
            <h3> <a href='registrarCliente.php'> Registro Cliente</a></h3>
            </div>";


    }
}

?>