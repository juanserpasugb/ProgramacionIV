<?php
 
 class empleado {

 private static $idEmpleado = 0;
 private $nombre;
 private $apellido;
 private $isss;
 private $renta;
 private $afp;
 private $sueldoNominal;
 private $sueldoLiquido;
 private $pagoxhoraextra;
 
 //CONSTANTES PARA DESCUENTOS DEL EMPLEADO
 const descISSS = 0.05;
 const descRENTA = 0.075;
 const descAFP = 0.085;
 //Constructor de la clase
 function __construct(){
 	//SELF hace referencia a la clase para así mandar llamar funciones estáticas.
 self::$idEmpleado++; 
 //This hace referencia a un objeto ya instanciado para mandar llamar funciones de cualquier otro tipo.
 $this->nombre = "";
 $this->apellido = "";
 //el sueldo liquido es el total final luego de todos los descuentos
 $this->sueldoLiquido = 0.0;
 //pago por hora extra es de $10.00 
 $this->pagoxhoraextra = 10.0;
 }
 //DESTRUCTOR DE UNA CLASE
 //ES UN método de una clase que se llama justo antes de una instancia de esa clase y se elimina de la memoria.
 //SOLO SE EJECTURA CUANDO SE CREA EL OBJETO,LUEGO SE INSTANCIA Y LO INICIALIZA
 function __destruct(){

 echo "\n<p>\n<a href=\"sueldoneto.php\">MENU</a>\n</p>\n";
 }

 //Propiedades de la clase empleado
 function obtenerSalarioNeto($nombre, $apellido, $salario, $horasExtras){
 	//This hace referencia a un objeto ya instanciado para mandar llamar funciones de cualquier otro tipo.
 $this->nombre = $nombre;
 $this->apellido = $apellido;
 $this->isss = ($salario + $horasExtras*$this->pagoxhoraextra) * self::descISSS;
 $this->renta = ($salario + $horasExtras*$this->pagoxhoraextra) * self::descRENTA;
 $this->afp = ($salario + $horasExtras*$this->pagoxhoraextra) * self::descAFP;
 $this->sueldoNominal = $salario; 
 $this->sueldoLiquido = $salario + $horasExtras*$this->pagoxhoraextra - ($this->isss +
$this->renta + $this->afp);
 $this->imprimirBoletaPago(self::$idEmpleado, $this->nombre, $this->apellido, 
 $this->isss, $this->renta, $this->afp, $this->sueldoNominal, $horasExtras*$this-> pagoxhoraextra,
$this->sueldoLiquido);
 }
 function imprimirBoletaPago($id, $nombre, $apellido, $descisss, $descrenta, $descafp,
$salarioNominal, $salarioHorasExtras, $salarioNeto){
 $tabla = "<table>\n<tr>\n";
 $tabla .= "<td>Id empleado: </td>\n";
 $tabla .= "<td>$id</td>\n</tr>\n";
 $tabla .= "<tr>\n<td>Nombre empleado: </td>\n";
 $tabla .= "<td>$nombre" . " " . "$apellido</td>\n</tr>\n";
 $tabla .= "<tr>\n<td>Salario nominal: </td>\n";
 $tabla .= "<td>$ " . number_format($salarioNominal, 2, '.', ',') . "</td>\n</tr>\n";
 $tabla .= "<tr>\n<td>Salario por horas extras: </td>\n";
 $tabla .= "<td>$ " . number_format($salarioHorasExtras, 2, '.', ',') .
"</td>\n</tr>\n";
 $tabla .= "<tr>\n<td colspan=\"2\">Descuentos</td>\n</tr>\n";
 $tabla .= "<tr>\n<td>Descuento seguro social: </td>\n";
 $tabla .= "<td>$ " . number_format($descisss, 2, '.', ',') . "</td>\n</tr>\n";
 $tabla .= "<tr>\n<td>Descuento renta: </td>\n";
 $tabla .= "<td>$ " . number_format($descrenta, 2, '.', ',') . "</td>\n</tr>";
 $tabla .= "<tr>\n<td>Descuento AFP: </td>\n";
 $tabla .= "<td>$ " . number_format($descafp, 2, '.', ',') . "</td>\n</tr>\n";
 $tabla .= "<tr>\n<td>Total descuentos: </td>\n";
 $tabla .= "<td>$ " . number_format($descisss + $descrenta + $descafp, 2, '.', ',') .
"</td>\n</tr>\n";
 $tabla .= "<tr>\n<td>Sueldo l&iacute;quido a pagar: </td>\n";
 $tabla .= "<td> $" . number_format($salarioNeto, 2, '.', ',') . "</td>\n</tr>\n";
 $tabla .= "</table>\n";
 echo $tabla;
 }
 }
?> 