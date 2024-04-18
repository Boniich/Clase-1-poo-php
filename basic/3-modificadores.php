<?php

class Persona
{
    //acessible por fuera y por dentro de la clase
    public $nombre = "Carlos";
    //accesible solo por dentro de la clase
    private $altura = 1.75;
    //accessible por dentro de la clase y para las clases hijas
    protected $oficio = "Empleado";

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    private function modificarAltura($altura)
    {
        $this->altura = $altura;
    }

    public function darOficio()
    {
        return $this->oficio;
    }
}



// $persona1 =  new Persona;

// echo $persona1->getNombre(). "\n";
// echo $persona1->getAltura(). "\n";
// echo $persona1->darOficio(). "\n";

// que pasa si yo intento hacer uso de la variable $altura por fuera de su clase?

//echo $persona1->altura;

// que pasa si yo intento hacer uso de la variable $oficio por fuera de su clase?

//echo $persona1->oficio;

//Que crees que pasara al tratar de ejecutar este metodo?
$persona1->modificarAltura(1.65);

// echo $persona1->getAltura(). "\n";


class Empleado extends Persona
{


    public function modificarOficio()
    {
        $this->oficio = "Trabajador";
        //$this->modificarAltura(1.50); //funcionara si intento utilizar un metodo con el modificador de accesso private?
    }
    
}

$empleado = new Empleado;

$empleado->modificarOficio();
echo $empleado->darOficio() . "\n";
echo $empleado->getAltura();



?>