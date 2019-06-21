<?php

include 'conWS.php';
if(isset($_GET)){
    $codigo = $_GET['idCuenta'];
    $param = array(
        'idCuenta'=>$codigo
    );
    $result=$client->call('Buscar',$param);
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
        <h2><b>Actualizar cuenta</b></h2>

        <form method="POST" action="">
                    <div class="form-group col-md-4">
                        <td><label for="Saldo">Saldo de la cuenta</label></td>
                        <td><input type="text" class="form-control" name="Saldo" id="Saldo" value='<?php if(isset($_GET['idCuenta'])){echo $result['cuenta'][0]['SaldoCuenta'];} ?>'></td>
                    </div>

                    <div class="form-group col-md-4">
                        <td><label for="cliente">id del cliente</label></td>
                        <td><input type="text" class="form-control" name="cliente" id="cliente" value='<?php if(isset($_GET['idCuenta'])){echo $result['cuenta'][0]['ClienteId'];} ?>'></td>
                    </div>
                    
               
                    <div class="form-group col-md-4">
                        <td><label for="transaccion">id de transaccion</label></td>
                        <td><input type="text" class="form-control" name="transaccion" id="transaccion" value='<?php if(isset($_GET['idCuenta'])){echo $result['cuenta'][0]['TransaccionId'];} ?>'></td>
                    </div>
                
                    
                
               
                    <td colspan="2">
                        <div class="col-md-4">
                            <button type="submit" id="enviar" class="btn btn-primary " name="enviar">Guardar Cambios</button>

                        </div>

                    </td>

        </form>
</body>
</html>

<?php

if(isset($_POST['enviar'])){
    $idCuenta = $codigo;
    $SaldoCuenta = $_POST['Saldo'];
    $ClienteId = $_POST['cliente'];
    $transaccionId = $_POST['transaccion'];


        $parametros = array(
            'idCuenta'=>$idCuenta,
            'SaldoCuenta'=>$SaldoCuenta,
            'ClienteId'=>$ClienteId,
            'TransaccionId'=>$transaccionId
        );

        $result = $client->call('actualizar',$parametros);
        if($result){
            echo "<script language='JavaScript'>
                alert('Cambios guardados');
                window.open('ICuenta.php','_self');
                </script>";
        }else{
            echo "Error en actualizar";
        }

}
?>
