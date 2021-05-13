<?php

#Funciones sin Parametros
function saludo() {
    echo "hola<br>";
};
saludo();

#Funcion con Parametros
function despedida($adios) {
    echo $adios."<br>";
};
despedida("chao chao");

#Funciones con Retorno
function retorno($retornar) {
    return $retornar;
};

echo retorno("retornar");

?>