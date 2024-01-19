<?php
/*Crea una clase Employee, define como atributos su nombre y sueldo. 
Definir un método initialize que reciba como parámetros el nombre y sueldo. 
Plantear un segundo método print que imprima el nombre y un mensaje si debe pagar o no impuestos
(si el sueldo supera 6000, paga impuestos).*/

$empleado = new Employee("Juan Pérez", 7000);
$empleado->printInfo();
class Employee
{
    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function printInfo()
    {
        echo "Nombre: $this->nombre" . PHP_EOL;
        echo "Sueldo: $this->sueldo" . PHP_EOL;

        if ($this->sueldo > 6000) {
            echo "Debe pagar impuestos" . PHP_EOL;
        } else {
            echo "No debe pagar impuestos" . PHP_EOL;
        }
    }
}