<?php
class contratista extends empleado     
{
private $totalHoras;
private $valorHora;

public function contratista($identificacion,$nombre,$cargo)
{

$this->identificacion=$identificacion;
$this->nombre=$nombre;
$this->cargo=$cargo;
}

public function calcularSalario($valorHora, $totalHoras)
{
$this->salario= $this->valorHora*$this->totalHoras;
}
public function getTotalHoras()
{
return $this->totalHoras;
}
public function getValorHora()
{
return $this->valorHora;
}
public function getCargo()
{
return $this->cargo;
}
public function getIdentificacion()
{
return $this->identificacion;
}
public function getNombre()
{
return $this->nombre;
}
public function getSalario()
{
return $this->salario;
}

public function setTotalHoras($valor)
{
$this->totalHoras = $valor;
}

public function setValorHora($valor)
{
$this->valorHora = $valor;
}
}
?>