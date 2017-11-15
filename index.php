<?php



function pitagor ($a, $b)
{
	$c= $a*$a + $b*$b;
	$c=sqrt($c);

	echo "Pitagor: $a, $b. Atsakymas $c </br>";

}

function rectangleArea($a, $b){
		$c=$a*$b;
		echo "Rectangle area: $c </br>";
}
function squareArea($a){

	$a=pow($a, 2);

	echo "Square Area: $a</br>";

}
function circleArea($a){

	$a=pi()*pow($a, 2);

	echo "Circle Area: $a </br>";
}
function trapezoidArea($a, $b, $h){

	$A= ($a+$b)/2*$h;

	echo "Trapezoid  Area: $A </br>";
}
function PentagonArea($a){

	$A= (1/4)*sqrt(5*(5+(2*sqrt(5))))*pow($a,2);
	echo "Pentagon Area: $A </br>";
}

function Logistics($a, $b, $c, $d){
	
	$A= $b/$a;
	$B= $d-($b+$c);


	Echo "Žmonių skaičius: $a</br>
		  Viso algoms: $b</br>
		  Sanaudos: $c</br>
		  Pajamos: $d </br>
		  Vidurkis algoms: $A </br>
		  Pelnas: $B </br>";
}

pitagor(10, 7);
rectangleArea(10, 7);
squareArea(5);
circleArea(2);
trapezoidArea(5, 5, 4);
PentagonArea(8);
echo "</br>";
Logistics(10, 8000, 400, 9000);
