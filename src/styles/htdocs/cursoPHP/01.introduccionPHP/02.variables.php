<?php 

#Variable Numerica
$numero = 26;
echo "Esto es una variable de numero: $numero <br><br>";
var_dump($numero);
echo "<br><br>";

#Variable de Texto
$texto = "palabra";
echo "Esto es una variable de texto: $texto <br><br>";
var_dump($texto);
echo "<br><br>";

#Variable Boleana
$boleana = true;
echo "Esto es una variable boleana: $boleana <br><br>";
var_dump($boleana);
echo "<br><br>";

#Variable Arreglo
$colores = array("rojo", "azul", "amarillo");
echo "Esto es una variable de arreglo $colores[1] <br><br>";
var_dump($colores);
echo "<br><br>";

#Variable Arreglo con Propiedades
$verduras = array("verdura1"=>"Lechuga", "verdura2"=>"Cebolla");
echo "Esto es una variable de arreglo con propiedades $verduras[verdura1] <br><br>";
var_dump($verduras);
echo "<br><br>";

#Variable de Tipo Objeto
$frutas = (object)["fruta1"=>"Pera", "fruta2"=>"Manzana"];
var_dump($frutas);
echo "Esto es una variable de tipo objeto $frutas->fruta1 <br><br>";
?>