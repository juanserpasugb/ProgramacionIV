<?php
require_once("nusoap/lib/nusoap.php");
require_once("funciones.php");

//instancia del server
$server = new soap_server();

$server->configureWSDL('Prueba', 'urn:Prueba');
/*
$server->wsdl->addComplexType('cliente','complextype', 'struct','all', '',
    array (
        'id_cliente' => array('id_cliente' =>'id_cliente', 'type'=>'xsd:string'),
        'Nombres' => array('Nombres' =>'Nombres', 'type'=>'xsd:string'),
        'Apellidos' => array('Apellidos' =>'Apellidos', 'type'=>'xsd:string'),
        'Sexo' => array('Sexo' =>'Sexo', 'type'=>'xsd:string'),
        'Edad' => array('Edad' =>'Edad', 'type'=>'xsd:string'),
        'Direccion' => array('Direccion' =>'Direccion', 'type'=>'xsd:string'),
        'Dui' => array('Dui' =>'Dui', 'type'=>'xsd:string')

    )
    );

    //se define el arreglo que va a contener estos struct 
    $server->wsdl->addComplextype('clienteArray','complextype', 'array', '', 'SOAP-ENC:Array',
    array(),
    array(
            array(
                'ref'=> 'SOAP-ENC:arraytype',
                'wsdl:arrayType' => 'tns:cliente []'
            )
         )
    );
*/
	
	$server->wsdl->addComplexType('cliente','complexType','struct','all','',
        array(
            'id_cliente' => array('id_cliente'=>'id_cliente','type'=>'xsd:string'),
            'Nombres' => array('Nombres'=>'Nombres','type'=>'xsd:string'),
			'Apellidos' => array('Apellidos'=>'Apellidos','type'=>'xsd:string'),
			'Sexo' => array('Sexo'=>'Sexo','type'=>'xsd:string'),
			'Edad' => array('Edad'=>'Edad','type'=>'xsd:string'),
			'Direccion' => array('Direccion'=>'Direccion','type'=>'xsd:string'),
			'Dui' => array('Dui'=>'Dui','type'=>'xsd:string')
        )
	);
	
	//se define el arreglo que va a contener estos structs:
	$server->wsdl->addComplexType('clienteArray','complexType','array','','SOAP-ENC:Array',
			array(),
			array(
				array(
					'ref' => 'SOAP-ENC:arrayType',
					'wsdl:arrayType' => 'tns:cliente[]'
				)
			)
	);
	
	
    //registro de la funcion listarcliente
    $server ->register(
        'listarcliente', 
        array('datos' => 'xsd:string'),
        array('result'=> 'xsd:bool', 'cliente' => 'tns:clienteArray', 'error' => 'xsd:string' ),
        'urn:PruebaWSDL' ,
        'urn:PruebaWSDL#listarcliente'
    );

    //registro de la funcion buscarcliente
    $server ->register(
        'buscarcliente', 
        array('id_cliente' => 'xsd:string'),
        array('result'=> 'xsd:bool', 'cliente' => 'tns:clienteArray', 'error' => 'xsd:string' ),
        'urn:PruebaWSDL' ,
        'urn:PruebaWSDL#buscarcliente'
    );
     //registro de la funcion nuevocliente
     $server ->register(
        'nuevoCliente', 
        array("id_cliente" => "xsd:string", "Nombres"=> "xsd:string", "Apellidos"=> "xsd:string", "Sexo"=> "xsd:string","Edad"=> "xsd:string",
        "Direccion"=> "xsd:string", "Dui"=> "xsd:string"),
        array('return'=>'xsd:boolean' ),
        'urn:PruebaWSDL' ,
        'urn:PruebaWSDL#nuevoCliente'
    );

     //registro de la funcion actualizacliente
     $server ->register(
        'actualizarcliente', 
        array("id_cliente" => "xsd:string", "Nombres"=> "xsd:string", "Apellidos"=> "xsd:string", "Sexo"=> "xsd:string","Edad"=> "xsd:string",
        "Direccion"=> "xsd:string", "Dui"=> "xsd:string"),
        array('return'=>'xsd:boolean' ),
        'urn:PruebaWSDL' ,
        'urn:PruebaWSDL#actualizarcliente'
    );

    //permite leer datos post sin procesar
    @$server->service(file_get_contents("php://input"));

    ?>

