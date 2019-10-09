<?php
function triangulo($x, $y, $z,$a, $b, $c){
echo tipo($x, $y, $z);
echo lados($a, $b, $c); 	
}
function tipo($x, $y, $z) {
	$r='rectangulo ';
		if ($x>90 || $y>90 || $z>90) {
			$r='obtusangulo ';
			}
		
		if($x<90 and $y<90 and $z<90){
			$r='acutangulo ';
	}
	return $r;
}
function lados($a, $b, $c) {
	$r='escaleno';
		if ($a==$b || $a==$c) {
			$r='isosceles';
		if($b==$c and $a==$c)
			$r='equilatero';
	}
	return $r;
}
echo triangulo(40,60,80,1,1,1)."<br>";
echo triangulo(50,30,90,1,2,1)."<br>";
echo triangulo(60,50,70,1,1,1)."<br>";
?>