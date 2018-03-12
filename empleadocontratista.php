<?php
include ('EMPLEADO.PHP');
include "CONTRATISTA.PHP";

echo "CALCULAR EL SALARIO DEL CONTRATISTA ";
echo "<BR>";

$identificacion = $_GET['ID_EMPLEADO'];
$nombre = $_GET['NOMBRE_EMPLEADO'];
$cargo =$_GET['CARGO_EMPLEADO'];
$valorHoraTrabajada = $_GET['VALOR'];
$totalHorasTrabajadas = $_GET['TOTAL_HORAS_TRABAJADAS'];


$objContratista = new Contratista($identificacion,$nombre,$cargo);

$objContratista->setvalorHora($valorHoraTrabajada);
$objContratista->setTotalHoras($totalHorasTrabajadas);

echo "<BR>ID EMPLEADO: " . $objContratista->getIdentificacion();
echo "<BR>NOMBRE EMPLEADO: " . $objContratista->getNombre();
echo "<BR>CARGO EMPLEADO: " . $objContratista->getCargo();
echo "<BR>VALOR DE LA HORA: $" . $objContratista->getValorHora();
echo "<BR>TOTAL HORAS TRABAJADAS: " . $objContratista->getTotalHoras();
echo "<BR> <BR> RESULTADOS <BR><BR>";

$objContratista->calcularSalario($valorhoratrabajada,$totalHorasTrabajadas);

echo "<BR>ID EMPLEADO: " . $objContratista->getIdentificacion();
echo "<bBR>NOMBRE EMPLEADO: " . $objContratista->getNombre();
echo "<BR>CARGO EMPLEADO: " . $objContratista->getCargo();
echo "<BR>SALARIO FINAL A RECIBIR: " . $objContratista->getSalario();
?>