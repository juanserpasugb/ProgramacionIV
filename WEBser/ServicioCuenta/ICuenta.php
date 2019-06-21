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
include 'conWS.php';

$result=$client->call('ListarCuentas');

if($client->fault){
    echo 'Fallo';
    print_r($result);
}else{
    $err = $client->
    getError();
    if($err){
        echo "Error".$err;
    }else{
        $columnas = count($result['cuenta']);

        echo "<br/>";
            echo "<center>
            <div>
                <h2>Listado de Cuentas</h2>
                <table class='table table-bordered col-md-8'>
                <tr>
                    <th scope='col'>Editar</th>
                    <th scope='col'>Cuenta</th>
                    <th scope='col'>Saldo de la cuenta</th>
                    <th scope='col'>Cliente de la cuenta</th>
                    <th scope='col'>Transaccion</th>
                </tr>
            
            ";

            for($i = 0;$i<$columnas;$i++){
                $codigo = $result['cuenta'][$i]['idCuenta'];
                echo "<tr>";
                echo "<td style='width:20px'><a href='ActualizarCuenta.php?idCuenta=$codigo' style='color:#2E64FE'>Editar</a></td>";
                echo "<td>".$result['cuenta'][$i]['idCuenta']."</td>";
                echo "<td>".$result['cuenta'][$i]['SaldoCuenta']."</td>";
                echo "<td>".$result['cuenta'][$i]['ClienteId']."</td>";
                echo "<td>".$result['cuenta'][$i]['TransaccionId']."</td>";
            }

            echo "
            </tr>
            </table>
            <h3>Registrar cuenta</h3>
            <td style='width:20px'><a href='RegistrarCuenta.php' style='color:#2E64FE'>Registrar Cuenta</a></td>
            </div>
            ";
    }
}




?>