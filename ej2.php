<?php
/*Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y
 alto. Define dos subclases; Triángulo y Rectángulo que hereden de Shape y que calculen respectivamente 
 el área de la forma area().*/
class Shape
{
    public $ancho;
    public $alto;

    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
    public function calcularArea()
    {
        $calcularArea = $this->ancho * $this->alto;
        return $calcularArea;

    }
}
class Triangulo extends Shape
{
    public function __construct($ancho, $alto)
    {
        parent::__construct($ancho, $alto);
    }

    public function area()
    {
        return this->calcularArea();
    }
}

class Rectangulo extends Shape
{
    public function __construct($ancho, $alto)
    {
        parent::__construct($ancho, $alto);
    }
    public function area()
    {
        return this->calcularArea();
    }

}

$triangulo = new Triangulo(5, 6);
$area = $triangulo->calcularArea();
echo "El area de triangulo es: " . $area . PHP_EOL;

$rectangulo = new Rectangulo(8, 9);
$area = $rectangulo->calcularArea();
echo "El area de rectangulo es: " . $area . PHP_EOL;
