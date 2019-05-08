<?php

class Operacion{
    //pro[piedades de la clase
    public $numero1,$numero2, $operacion, $resultado;

    function __construct($num1,$num2){

        $this->numero1 = $num1;
        $this->numero2 = $num2;

    

    }

    public function mostrarResultado($resul,$signo){
        $this->resultado = $resul;
        echo " El resultado de ".$this->numero1." ".$signo." ".$this->numero2." = ".$this->resultado."<br>";


    }

}

class Suma extends Operacion{

    public function __construct($nume1,$nume2){
        parent:: __construct($nume1,$nume2);
    }

    public function suma(){

        $this->operacion = $this->numero1 + $this->numero2;
        $this->mostrarResultado($this->operacion,"+");
        
    }

}

class Resta extends Operacion{
    public function __construct($nume1,$nume2){
        parent::__construct($nume1,$nume2);
    }

    public function resta(){

        $this->operacion = $this->numero1 - $this->numero2;
        $this->mostrarResultado($this->operacion,"-");

    }

}

class Multiplicacion extends Operacion{
    public function __construct($nume1,$nume2){
        parent::__construct($nume1,$nume2);
    }

    public function multiplicar(){

        $this->operacion = $this->numero1 * $this->numero2;
        $this->mostrarResultado($this->operacion,"*");

    }

}

//instancia de la clase
$sum1 = new Suma(10,20);
$Resta = new Resta(10,5);
$multi = new Multiplicacion(5,5);

$sum1->suma();
$Resta->resta();
$multi->multiplicar();



















?>