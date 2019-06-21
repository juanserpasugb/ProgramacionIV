<?php

include 'conWS.php';

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
        <h2><b>Registro de una nueva cuenta</b></h2>

        <form method="POST" action="">
            
                    <div class="form-group col-md-4">
                            <td><label for="Saldo">Saldo de la cuenta</label></td>
                            <td><input type="text"  class="form-control" name="Saldo" id="Saldo" placeholder="ejemplo 500"></td>
                    </div>
       
                    <div class="form-group col-md-4">
                            <td><label for="cliente">id del cliente</label></td>
                            <td><input type="text"  class="form-control" name="cliente" id="cliente" placeholder="del 1 al 5"></td>
                    </div>

                    <div class="form-group col-md-4">

                            <td><label for="transaccion">id de transaccion</label></td>
                            <td><input type="text"  class="form-control" name="transaccion" id="transaccion" placeholder="del 1 al 5"></td>
                    </div>
                    
               
                
                    <td colspan="2">
                        <div class="col-md-4">
                            <button type="submit"  class="btn btn-primary " id="enviar" name="enviar">Guardar datos</button>

                        </div>

                    </td>
                
        </form>
</body>
</html>

<?php

if(isset($_POST['enviar'])){
    $SaldoCuenta = $_POST['Saldo'];
    $ClienteId = $_POST['cliente'];
    $transaccionId = $_POST['transaccion'];


        $parametros = array(
            'SaldoCuenta'=>$SaldoCuenta,
            'ClienteId'=>$ClienteId,
            'TransaccionId'=>$transaccionId
        );

        $result = $client->call('NuevaCuenta',$parametros);
        if($result){
            echo "<script language='JavaScript'>
                alert('Resgistro exitoso');
                window.open('ICuenta.php','_self');
                </script>";
        }else{
            echo "Error en registro";
        }

}
?>
