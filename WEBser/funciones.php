<?php
include('Conexion.php');

//listar cliente
function listarcliente(){
    $pdo = Conexion::conectar();
    $consulta = $pdo->prepare("Select id_Cliente,Nombres,Apellidos,Sexo,Edad,Direccion,Dui FROM cliente");
    $consulta->execute();
    $resultado=$consulta->fetchAll();
    $list = array();

    foreach($resultado as $row) {
        array_push($list, array(
            'id_Cliente'=>$row['id_Cliente'],
            'Nombres'=>$row['Nombres'],
            'Apellidos'=>$row['Apellidos'],
            'Sexo'=>$row['Sexo'],
            'Edad'=>$row['Edad'],
            'Direccion'=>$row['Direccion'],
            'Dui'=>$row['Dui']
        ));

    }
    return array("result"=> true , "cliente"=> $list);
}

//registrar nuevo Cliente
function nuevoCliente($idcliente,$nombres,$apellidos,$sexo,$edad,$direccion,$dui){
    $pdo = Conexion::conectar();
    if ($pdo) {
        $consulta = "INSERT INTO cliente (id_Cliente,Nombres,Apellidos,Sexo,Edad,Direccion,Dui) VALUES ('".$idcliente."', '".$nombres."', '".$apellidos."', '".$sexo."', '".$edad."', '".$direccion."','".$dui."')";
            $pdo->prepare ($consulta)->execute();
            return true;
    }
    return false;
}
//busqueda registro por id
function buscarcliente($idcliente){
        $pdo = Conexion::conectar();
        $consulta = $pdo->prepare("select id_Cliente,Nombres,Apellidos,Sexo,Edad,Direccion,Dui FROM cliente WHERE id_Cliente='".$idcliente."'");
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $list = array ();
        
        foreach($resultado as $row) {
            array_push($list, array(
                'id_Cliente'=>$row['id_cliente'],
                'Nombres'=>$row['Nombres'],
                'Apellidos'=>$row['Apellidos'],
                'Sexo'=>$row['Sexo'],
                'Edad'=>$row['Edad'],
                'Direccion'=>$row['Direccion'],
                'Dui'=>$row['Dui']
            ));
        }
        return array("result" => true , "cliente"=> $list);
}
//actualizar registros
function actualizarcliente($idcliente,$nombres,$apellidos,$sexo,$edad,$direccion,$dui){
    $pdo = Conexion::conectar();
    if ($pdo) {
        $consulta = "UPDATE cliente SET Nombres='".$nombres."', Apellidos='".$apellidos."', Sexo='".$sexo."' , Edad='".$edad."' 
        , Direccion='".$direccion."' , Dui='".$dui."' WHERE id_Cliente='".$idcliente."'"; 
        $pdo-> prepare($consulta)->execute();
        return true;


    }
    return false ;
}


?>