<?php


class Persona{

    public $Nombre;

    function __construct($nombre){

        $this->Nombre = $nombre;

    }

    public function Registrar(){

    }

    public function Consultar(){
    	
    	$this->Nombre;

    }

    public function Sueldo($Salario){

        $this->Nombre. $Salario;

    }

}

class Docente extends Persona{
    private $Cargo;
    private $HorasTrabajadas;
    public function __construct($nombreD,$cargoD,$horas)
    {
         $this->Cargo = $cargoD;
    	 $this->HorasTrabajadas = $horas;
        parent::__construct($nombreD);

    }
    
    
    public function Consultar(){
    	parent::Consultar();
    	$this->HorasTrabajadas;
    	$this->Cargo;
    	
    }
    public function Sueldo($sueldo){
        parent::Sueldo($sueldo);

    }

}

class PersonalLimpieza extends Persona{
    public $Turno;
    public function __construct($nombreL,$turno)
    {
    	  $this->Turno = $turno;
        parent::__construct($nombreL);
    }
    
    public function Consultar(){
    	parent::Consultar();
    	$this->Turno;
    }

    public function Sueldo($sueldo){
        parent::Sueldo($sueldo);

    }
    

}

class Administrativo extends Persona{
	  public $Area;
    public function __construct($nombreArea,$area)
    {
    	  $this->Area = $area;
        parent::__construct($nombreArea);
        
    }
    
    public function Consultar(){
    	parent::Consultar();
    	$this->Area;
    }

    public function Sueldo($sueldo){
        parent::Sueldo($sueldo);

    }
    

}









?>