<?php

//Ejercicio #1: Crear una clase CuentaBancaria que permita a los usuarios depositar y retirar dinero, además de consultar el saldo.
// Debe contanar con una variable llamada saldo o dinero
// Definir el constructor para la clase con los parametros necesarios
// Debe contar con metodo que permitan depositar el dinero y retirarlo
// Al momento de retirar, si el monto solicitado es superior a lo que hay en la cuenta, se debe imprimir un mensaje de saldo insuficiente

//Ejercicio #2: Desarrollar una clase Libro que incluya propiedades como titulo, autor y año de publicación, y métodos para cambiar y obtener estas propiedades.
// Definir el constructor para la clase con los parametros necesarios

// $a = 5;

// do {

//     echo "Ingresa una opcion";
//     $opcion = readline();

//     switch ($opcion) {
//         case '1':
//             echo "esta es la primera";
//             //hago lo que sea
//             break;
//         case "2":
//             echo "este es el caso";
//             break;
        
//         default:
//             # code...
//             break;
//     }

// } while ($a <= 10);

//si yo quiero llamar una funcion, debo usar su nombre y poner ()
//si lleva parametros, debo hacer la correcta entrada de datos

//defini funcion
//las funciones que devuelven algo, que usan el return
// las funciones de procedimientos que no devuelven nada



function miFunction()
{
    return "Esta es mi funcion fuera de toda clase". "\n";
}

//la llamo
echo miFunction();


function miFunction2()
{
    echo "Esta es mi funcion DOS fuera de toda clase";
}

//la llamo
miFunction2();

//getSaldo()=$this->getSaldo-$dinero;

//$saldoRestante = $this->getSaldo()-$dinero;
//$this->saldo = $this->getSaldo()-$dinero;
//$saldoRestante = $this->getSaldo()-$dinero;
//$this->setSaldo($saldoRestante);

class Personaje
{
    public $estado = "Luchador";
    public $a = 5;

    public function getEstado()
    {
        return $this->estado;
    }

    public function chekear()
    {
        if($this->a = 45)
        {
            echo "a es 45";
        }
    }



    public function menu(){
        do {

            echo "Ingresa una opcion";
            $opcion = readline();
        
            switch ($opcion) {
                case '1':
                    echo "esta es la primera";
                    //hago lo que sea
                    break;
                case "2":
                    echo "este es el caso";
                    break;
                
                default:
                    # code...
                    break;
            }
        
        } while ($this->a <= 10);
    }
}


$personaje = new Personaje();

echo "Variable ". $personaje->estado . "\n";
echo "Metodo ". $personaje->getEstado() . "\n";
$personaje->menu();


?>