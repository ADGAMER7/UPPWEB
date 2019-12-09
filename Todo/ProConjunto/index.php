<?php declare(strict_types=1); // strict requirement
print"Mi primer php";
echo "<br/> Bienvenidos";
$numero = 5;
echo "<br/> el valor es $numero";

function Bienvenido(){
	echo "<br/> Bienvenido a la clase de web";
}

Bienvenido();

function Despedida(){
	$adios="<br/>es broma<br/>";
	return $adios;
}

echo Despedida();

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

function comparacion(){

$a=5;
$b=10;
$c=10;
$d=5;

if ($a>$b) {
	echo "A es mayor que b ";
}else if ($b==$c) {
	echo "<br/>B es igual a C <br/>";
}else
echo "B y C son diferentes <br>";
}
comparacion();
?>