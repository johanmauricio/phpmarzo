<?php

class empleado
{
protected $cargo;
protected $identificacion;
protected $nombre;
protected $salario;

public function empleado($identificacion,$nombre,$cargo)
{
$this->identificacion=$identificacion;
$this->nombre=$nombre;
$this->cargo=$cargo;
}
protected function getCargo()
{
return $this->cargo;
}
protected function getIdentificacion()
{
return $this->identificacion;
}
protected function getNombre()
{
return $this->nombre;
}

protected function getSalario()
{
return $this->salario;
}

protected function setCargo($valor)
{
$this->cargo = $valor;
}

protected function setIdentificacion($valor)
{
$this->identificacion = $valor;
}
protected function setnombre($valor)
{
$this->nombre = $valor;
}

protected function setSalario($valor)
{
$this->salario = $valor;
}
}
?>