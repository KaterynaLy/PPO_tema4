<?php
/*Crea una clase Employee, define como atributos su nombre y sueldo. 
Definir un método initialize que reciba como parámetros el nombre y sueldo. 
Plantear un segundo método print que imprima el nombre y un mensaje si debe pagar o no impuestos
(si el sueldo supera 6000, paga impuestos).*/

class Employee
{
    // Atributos
    private $nombre;
    private $sueldo;

    // Método para inicializar los atributos
    public function initialize($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function printInfo()
    {
        echo "Nombre: $this->nombre<br>";
        echo "Sueldo: $this->sueldo<br>";

        if ($this->sueldo > 6000) {
            echo "Debe pagar impuestos.<br>";
        } else {
            echo "No debe pagar impuestos.<br>";
        }
    }
}

// Crear un objeto Employee
$empleado = new Employee();

// Inicializar el objeto con nombre y sueldo
$empleado->initialize("Juan Pérez", 7000);

// Imprimir la información del empleado
$empleado->printInfo();
?>