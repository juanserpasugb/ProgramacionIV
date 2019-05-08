<?php

//clase padre
class Gato{
    private $nombre;
    private $edad;

    function __construct ($name, $age){
        $this->nombre=$name;
        $this->edad=$age;
    }

    public function maullar(){
        return "miau";
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
}

//clase hija
class gatoCasero extends Gato{
    //sobreescritura de metodo heredado
    public function maullar(){
        return "Miau miau";
    }
}

    //instancias de las clases
    $negro = new Gato("negro",3);
    echo "mi nombre es ". $negro->getNombre . " y tengo " . $negro->getEdad(). "a;os";
    echo $negro->maullar();
//$pelusa = new gatoCasero("pelusa", 5);



?>