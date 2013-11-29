<?php
include_once "classes/NewtonInterpolator.php";

/*
if (!isset($_GET["puntos"])) {
	return json_encode(array());
}
*/

//$puntos = json_decode($_GET["puntos"]);
$puntos = array (
	1 => 3,
	2 => 10,
	8 => 89,
	4 => 90,
);
$newtonInterpolator = new NewtonInterpolator();
$newtonInterpolator->setData($puntos);
$newtonInterpolator->buildPolynomial();
echo "<pre>";
echo "PROGRESIVO \n";
var_dump($newtonInterpolator->obtenerCoeficientesPolinomio());
echo "REGRESIVO \n";
var_dump($newtonInterpolator->obtenerCoeficientesPolinomio("R"));
echo "CALCULO PROGRESIVO: ";
echo ($newtonInterpolator->interpolate(4));
echo "\n";
echo "CALCULO REGRESIVO: ";
echo ($newtonInterpolator->interpolate(4, "R"));
echo "\n";
echo $newtonInterpolator->imprimirPolinomio();

?>

