<?php

// Crea una clase llamada Personaje
// Como atributos publicos tendra, nombre, vida, ataque y defensa
// Como metodos publicos tendra el set y get de nombre, vida, ataque y defensa
// Crea dos objetos de la clase Personaje:

// En este caso toda la informacion sera ingresada y devuelta a traves de los metodos set y get correspondientes para cada caso

// Objeto 1
// nombre = "Luchador"
// vida = 100
//ataque = 200
// defensa = 95


// Objeto 2
// nombre = "Mago"
// vida = 150
//ataque = 80
// defensa = 100

// como tengo que hacer para hacer uso de la informacion de mi objeto?
// que pasa si yo quiero imprimir mi objeto por si solo?
// de que forma puedo mostrar la estructa interna de mi objeto?


class Personaje
{
    public $nombre;
    public $vida;
    public $ataque;
    public $defensa;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setVida($vida)
    {
        $this->vida = $vida;
    }

    public function getVida()
    {
        return $this->vida;
    }

    public function setAtaque($ataque)
    {
        $this->ataque = $ataque;
    }

    public function getAtaque()
    {
        return $this->ataque;
    }

    public function setDefensa($defensa)
    {
        return $this->defensa = $defensa;
    }

    public function getDefensa()
    {
        return $this->defensa;
    }

    
}

$persona1 = new Personaje;

$persona1->setNombre("Luchador");
$persona1->setVida(100);
$persona1->setAtaque(150);
$persona1->setDefensa(95);

echo $persona1->getNombre();
echo $persona1->getVida();


?>