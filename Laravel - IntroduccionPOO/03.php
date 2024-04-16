<?php
include 'includes/header.php';

// Atributos de una clase
class Empleado { 

    //estos son los atributos de la clase
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}

$empleado = new Empleado;

//aplicando el signo flecha 
$empleado->nombre = "Juan";
$empleado->apellido = "De la torre";

//mostrando el resultado
echo "<pre>";
var_dump($empleado);
echo "</pre>";


$empleado2 = new Empleado;

$empleado2->nombre = "Karen";
$empleado2->apellido = "Perez";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";