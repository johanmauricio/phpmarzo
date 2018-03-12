<?php
include ('empleadoLanta.PHP');
include "PLANTA.PHP";
echo "CALCULAR SALARIO EMPLEADO";
echo "<BR>";

$identificacion= $_GET['ID_EMPLEADO'];
$nombre= $_GET['NOMBRE_EMPLEADO'];
$cargo = $_GET['CARGO_EMPLEADO'];
$SueldoBasico =  $_GET['CARGO_EMPLEADO'];
$valorExtras= $_GET['VALOR'];
$deducciones= $_GET['TOTAL_HORAS_TRABAJADAS'];

$objPlanta = new Planta($identificacion,$nombre,$cargo);

$objPlanta->setSueldoBasico($SueldoBasico);
$objPlanta->setValorExtras($valorExtras);
$objPlanta->setDeducciones($deducciones);

echo "<BR>DIGITE ID EMPLEADO: " . $objPlanta->getIdentificacion();
echo "<BR>NOMBRE DEL EMPLEADO: " . $objPlanta->getNombre();
echo "<BR>CARGO: " . $objPlanta->getCargo();
echo "<BR>SUELDO BASICO: $" . $objPlanta->getSueldoBasico();
echo "<BR>VALOR HORAS EXTRAS: $" . $objPlanta->getValorExtras();
echo "<BR>TOTAL DEDUCIONES: $" . $objPlanta->getDeducciones();
echo "<BR> <BR> RESULTADOS <BR><BR>";

$objPlanta->calcularSalario();

echo "<BR>DIGITE ID EMPLEADO: " . $objPlanta->getIdentificacion();
echo "<BR>NOMBRE DEL EMPLEADO: " . $objPlanta->getNombre();
echo "<BR>Cargo : " . $objPlanta->getCargo();
echo "<BR>SALARIO NETO: $" . $objPlanta->getSalario();
?>