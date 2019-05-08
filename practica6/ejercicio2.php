<?php
//clase padre
    class vehiculo{
        private $numerPlaca;
        private $color;
        private $modelo;
        private $capacidad;


        //constructor
        function _construct($numplaca,$Color,$modeloV,$capacidaV){
            $this->numerPlaca= $numplaca;
        }

        //metod protected  solo se puede acceder a ellos desde el interior de la clase
        //as clases heredadas de está también podrán leer y alterar estos atributos.
        //poseen caracteristicas comunes las clases hijos
        protected function acelerar($acelar){

        }
        protected function cambiarmodelo($modelo){

        }
        protected function arrancar(){

        }
        protected function verestado(){

        }
    }


    ?>