<?php

#Condiciones
$a = 5;
$b = 10;

if($a > $b) {
    echo "A es mayor que B";
}
else if($a == $b) {
    echo "A es igual que B";
}
else {
    echo "B es mayor que A";
}
echo "<br><br>";

# Switch
$dia = "sabado";

switch ($dia) {
    case 'Viernes':
        echo "Voy a ir a una Fiesta";
        break;
    case 'sabado':
        echo "Voy a Estudiar";
        break;
    case 'Domingo':
        echo "Voy a Descansar";
        break;
    default:
        echo "Voy a la Escuela";
        break;
}
echo "<br><br>";

#Ciclos
$n = 1;

while ($n < 5) {
    echo $n;
    $n++;
}
echo "<br><br>";

#Ciclo Do While
$p = 1;

do {
    echo $p;
    $p++;
}while ($p <= 5);
echo "<br><br>";

#Ciclo For

for($i = 0; $i <= 5 ; $i++){
    echo $i;
}

?>