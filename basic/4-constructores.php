<?php

//usamos nuestra clase auto nuevamente, simplemente la volvemos a definir en un nuevo archivo


class Auto
{
    //atributos
    public $marca;
    public $color;

    // en php solo es posible tener un constructor por clase

    public function __construct($marca, $caballosDeFuerza) {
        $this->marca = $marca;
        $this->color = $color;
        $this->caballosDeFuerza = $caballosDeFuerza;
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

//caja (objeto ferrari) -> ($marca = "Ferrari")
//caja (objeto clio) -> ($marca = "clio")

$ferrari = new Auto("Ferrari","Negro",150);
//$marca = "Ferrari"
//$color = "Rojo"
// $clio = new Auto("Clio","Azul");

//$marca = "clio"
//$color = "azul"

//$ferrari->setMarca("Ferrari"); // $marca = "Ferrari"
// hacemos lo mismo que en el caso anterior
//$ferrari->setColor("Rojo"); // $color = "Rojo"

echo "Los datos de nuestro objeto ferrari son: " . "\n";
echo $ferrari->getMarca(). "\n"; // Ferrari
echo $ferrari->getColor() . "\n"; // Rojo
echo $ferrari->acelerar() . "\n";

// echo  "\n";

// // imprimimos los valores de nuestro objeto ferrari
// echo "Los datos de nuestro objeto Clio son: " . "\n";
// echo $clio->getMarca(). "\n";
// echo $clio->getColor() . "\n";
// echo $clio->acelerar() . "\n";

// //$marca = "clio"
// $clio->setMarca("Fitito");
// //$marca = "fitito"

// echo  "\n";

// echo "Los datos de nuestro objeto Fitito son: " . "\n";
// echo $clio->getMarca(). "\n";
// echo $clio->getColor() . "\n";
// echo $clio->acelerar() . "\n";