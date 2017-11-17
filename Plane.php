<?php

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
	$h = (($BUSINESS_CLASS*$PRICE_BUSINESS)$FILL_BUSINESS)*$margin;
	$i = (($ECONOMY_CLASS*$PRICE_ECONOMY)$FILL_ECONOMY)*$margin;


	$d= $a+$b+$c;
	$e= $A + $B + $C;
	$E = $e - $costs;
	$D = $d - $costs;
	$F = $e - $d;

	if($d<$costs){
		Echo "The profits are in the negative </br>";
	}




	Echo "Possible profits before tax are $e </br>
		  Possible profits from First Class: $a </br>
		  Possible profits from Business Class: $b </br>
		  Possible profits from Economy Class: $c </br>
		  Total Possible Profits after tax: $D </br>
		  Actual Profits from First Class: $g </br>
		  Actual Profits from Business Class: $h </br>
		  Actual Profits from Economy Class: $i </br>
		  $E</br>
		  $F";

}