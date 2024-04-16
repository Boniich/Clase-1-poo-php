<?php

//usamos nuestra clase auto nuevamente, simplemente la volvemos a definir en un nuevo archivo


class Auto
{
    //atributos
    public $marca;
    public $color;

    public function __construct($marca, $color) {
        $this->marca = $marca;
        $this->color = $color;
    }

    //comportamientos (metodos)
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function acelerar()
    {
        return "ruuuuun";
    }
}

$ferrari = new Auto("Ferrari","Rojo");
$clio = new Auto("Clio","Azul");

echo "Los datos de nuestro objeto ferrari son: " . "\n";
echo $ferrari->getMarca(). "\n";
echo $ferrari->getColor() . "\n";
echo $ferrari->acelerar() . "\n";

echo  "\n";

// imprimimos los valores de nuestro objeto ferrari
echo "Los datos de nuestro objeto Clio son: " . "\n";
echo $clio->getMarca(). "\n";
echo $clio->getColor() . "\n";
echo $clio->acelerar() . "\n";