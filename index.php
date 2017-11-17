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

function plane_2($costs, $margin){
	$FIRST_CLASS = 10;
	$BUSINESS_CLASS = 30;
	$ECONOMY_CLASS = 280;

	$PRICE_FIRST = 10000;
	$PRICE_BUSINESS = 4000;
	$PRICE_ECONOMY = 500;

	$FILL_FIRST = 1;
	$FILL_BUSINESS = 0.8;
	$FILL_ECONOMY = 0.68;

	// Without Margin
	$A = $FIRST_CLASS*$PRICE_FIRST;
	$B = $BUSINESS_CLASS*$PRICE_BUSINESS;
	$C = $ECONOMY_CLASS*$PRICE_ECONOMY;
	//With Margin
	$a = ($FIRST_CLASS*$PRICE_FIRST)*$margin;
	$b = ($BUSINESS_CLASS*$PRICE_BUSINESS)*$margin;
	$c = ($ECONOMY_CLASS*$PRICE_ECONOMY)*$margin;


	$d= $a+$b+$c;
	$e= $A + $B + $C;
	$E = $e - $costs;
	$D = $d - $costs;


	if($d<$costs){
		Echo "The profits are in the negative </br>";
	}


	Echo "Possible profits before tax are $e </br>
		  Possible profits from First Class: $a </br>
		  Possible profits from Business Class: $b </br>
		  Possible profits from Economy Class: $c </br>
		  Total Possible Profits after tax: $D </br>
		  $E";
}

function plane($costs, $margin){
	$FIRST_CLASS = 10;
	$BUSINESS_CLASS = 30;
	$ECONOMY_CLASS = 280;

	$PRICE_FIRST = 10000;
	$PRICE_BUSINESS = 4000;
	$PRICE_ECONOMY = 500;

	$FILL_FIRST = 1;
	$FILL_BUSINESS = 0.8;
	$FILL_ECONOMY = 0.68;

	// Without Margin
	$A = $FIRST_CLASS*$PRICE_FIRST;
	$B = $BUSINESS_CLASS*$PRICE_BUSINESS;
	$C = $ECONOMY_CLASS*$PRICE_ECONOMY;
	//With Margin
	$a = ($FIRST_CLASS*$PRICE_FIRST)*$margin;
	$b = ($BUSINESS_CLASS*$PRICE_BUSINESS)*$margin;
	$c = ($ECONOMY_CLASS*$PRICE_ECONOMY)*$margin;


	$d= $a+$b+$c;
	$e= $A + $B + $C;
	$E = $e - $costs;
	$D = $d - $costs;
	$F = $e - $d;

	if($d<$costs){
		Echo "The profits are in the negative </br>";
	}


	Echo "Possible income before tax are $e </br>
		  Possible income from First Class: $a </br>
		  Possible income from Business Class: $b </br>
		  Possible income from Economy Class: $c </br>
		  Total Possible Profits after tax: $D </br>
		  $E</br>
		  $F";

}

function planefix($costs, $margin){
	$FIRST_CLASS = 10;
	$BUSINESS_CLASS = 30;
	$ECONOMY_CLASS = 280;

	$PRICE_FIRST = 10000;
	$PRICE_BUSINESS = 4000;
	$PRICE_ECONOMY = 500;

	$FILL_FIRST = 1;
	$FILL_BUSINESS = 0.8;
	$FILL_ECONOMY = 0.68;

	// Without Margin
	$A = $FIRST_CLASS*$PRICE_FIRST;
	$B = $BUSINESS_CLASS*$PRICE_BUSINESS;
	$C = $ECONOMY_CLASS*$PRICE_ECONOMY;
	//With Margin
	$a = ($FIRST_CLASS*$PRICE_FIRST)*$margin;
	$b = ($BUSINESS_CLASS*$PRICE_BUSINESS)*$margin;
	$c = ($ECONOMY_CLASS*$PRICE_ECONOMY)*$margin;
	//Filled with people
	$g = (($FIRST_CLASS*$PRICE_FIRST)*$FILL_FIRST)*$margin;
	$h = (($BUSINESS_CLASS*$PRICE_BUSINESS)*$FILL_BUSINESS)*$margin;
	$i = (($ECONOMY_CLASS*$PRICE_ECONOMY)*$FILL_ECONOMY)*$margin;

	$d= $a+$b+$c;
	$e= $A + $B + $C;
	$E = $e - $costs;
	$D = $d - $costs;
	$F = $e - $d;
	$G = $g + $h + $i;
	//Passangers
	$H = $ECONOMY_CLASS*$FILL_ECONOMY;
	$I = $FIRST_CLASS*$FILL_FIRST;
	$J = $BUSINESS_CLASS*$FILL_BUSINESS;
	$k = $ECONOMY_CLASS + $BUSINESS_CLASS + $FIRST_CLASS;

	$j = $H+$I+$J;
	$K = $G - $costs;


	if($d<$costs){
		Echo "The profits are in the negative </br>";
	}

	Echo "Possible income before tax are $e </br>
		  Possible income From First Class: $a </br>
		  Possible income From Business Class: $b </br>
		  Possible income From Economy Class: $c </br></br>
		  Total Possible Profits after tax: $D </br>
		  Income From First Class: $g </br>
		  Income From Business Class: $h </br>
		  Income From Economy Class: $i </br>
		  Total  Income : $G </br>
		  Profits: $K </br>
		  Total Pasangers that flew: ";
		  Echo floor($j);

	Echo "</br> Out of Total possible: $k";

}


pitagor(10, 7);
rectangleArea(10, 7);
squareArea(5);
circleArea(2);
trapezoidArea(5, 5, 4);
PentagonArea(8);
echo "</br>";
Logistics(10, 8000, 400, 9000);
echo "</br>";
plane(250000, 0.7);
echo "</br>";
echo "</br>";
plane_2(250000, 0.3);
echo "</br>";
echo "</br>";
planefix(250000, 0.3);
