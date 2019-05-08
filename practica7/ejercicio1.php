<?php
class areaFigura{
    //propiedades de la clase
    //se utiliza protected porque sera visible en esta clase y clase derivada
protected $ancho;
protected $largo;
protected $resultado;

//contructor de la clase
//utilzado para darle un valor a los atributos del objeto al crearlo
    function __construct($v_largo, $v_ancho){
    $this->ancho=$v_ancho;
    $this->largo=$v_largo;
    } 

    //DESTRUCTOR DE UNA CLASE
 //ES UN método de una clase que se llama justo antes de una instancia de esa clase y se elimina de la memoria.
 //SOLO SE EJECTURA CUANDO SE CREA EL OBJETO,LUEGO SE INSTANCIA Y LO INICIALIZA
    function __destruct(){
    echo "<br> objeto tipo areafigura destruido. <br>";

    }
    //metodo de la clase
    function calcularArea(){
    $this->resultado=$this->ancho * $this->largo;
    return $this->resultado;
    }

}
//herencia entre clase
//extendiendo la clase areaFigura
class volumeFigura extends areaFigura{
    //propiedades de la clase hija
    private $alto;
    private $volumen;
    private $var_ancho;
    private $var_largo;

    //constructor de la clase hija
    function __construct($v_alto, $v_largo,$v_ancho){
        parent :: __construct($v_alto,$v_largo);//llamada al constructor de la clase padre
        $this->alto=$v_ancho;
    }

    //destructor de la clase hija
    function __destruct(){
        echo "<br> objeto volumenfigura destruido.<br>";

    }
    //metodo de la clase hija al cual accedemos a operar o calcular volumen
    function calcularVolumen(){
        $this->volumen=($this->ancho) * ($this->largo)*($this->alto);
    }
}

//al momento d ejecutar el metodo destructor se efectua es por tal motivo de destruye al contrsuctor
?>