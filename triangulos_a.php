<?php

function tipo($x, $y, $z) {
	$r='escaleno';
		if ($x==$y || $x==$z) {
			$r='isosceles';
		if($y==$z and $x==$z)
			$r='equilatero';
	}
	return $r;
}
echo tipo(3,3,3)."<br>";
echo tipo(4,2,4)."<br>";
echo tipo(3,4,5)."<br>";

?>