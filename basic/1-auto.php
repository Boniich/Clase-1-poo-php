<?php

//Como ya dijimos una clase no es mas que un plano o plantilla para la creacion de nuestros objetos
//entonces teniendo la clase Auto, definiendo sus atributos y comportamientos
//podemos crear tantos objetos autos como queramos

class Auto
{
    //atributos
    public $marca;
    public $color;


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

    public function acelerar($velocidad)
    {
        return $velocidad*2;
    }
}

// una vez definida nuestra clase, podemos crear los objetos en base a esta
//Creamos un objeto de tipo Auto, que contendra los valores de una ferrari

$ferrari = new Auto;
// utilizamos el metodo "set" de marca para modificar el valor de la propiedad $marca DENTRO DEL OBJETO FERRARI
$ferrari->setMarca("Ferrari");
// hacemos lo mismo que en el caso anterior
$ferrari->setColor("Rojo");

// imprimimos los valores de nuestro objeto ferrari
echo "Los datos de nuestro objeto ferrari son: " . "\n";
echo $ferrari->getMarca(). "\n";
echo $ferrari->getColor() . "\n";
echo $ferrari->acelerar(100) . "\n";


$clio = new Auto;
// utilizamos el metodo "set" de marca para modificar el valor de la propiedad $marca DENTRO DEL OBJETO CLIO
$clio->setMarca("CLIO");
// hacemos lo mismo que en el caso anterior
$clio->setColor("Azul");

echo  "\n";

// imprimimos los valores de nuestro objeto ferrari
echo "Los datos de nuestro objeto Clio son: " . "\n";
echo $clio->getMarca(). "\n";
echo $clio->getColor() . "\n";
echo $clio->acelerar(70) . "\n";



?>