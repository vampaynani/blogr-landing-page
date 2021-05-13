<?php

#Clase
class Automovil {
    #Propiedades
    public $marca;
    public $modelo;
    #Metodo
    public function mostrar() {
        echo "<p>Hola soy un $this->marca, modelo $this->modelo</p>";
    }
}

#Objeto
$a = new Automovil();
$a->marca = "Toyota";
$a->modelo = "Corolla";
$a->mostrar();

$b = new Automovil();
$b->marca = "Hyundai";
$b->modelo = "Accent Vision";
$b->mostrar();

?>