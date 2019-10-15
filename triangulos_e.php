<?php

function triangulo($☺) {
	$a=$☺[0];
	$b=$☺[1];
	$c=$☺[2];

	$x=($a**2-$b**2+$c**2)/(2*$c);
	$h=sqrt($a**2-$x**2);
	$A=atan($h/($c-$x))*(360/(2*3.14));
	$B=atan($h/$x)*(360/(2*3.14));
	$C=180-($A+$B);
	
return [
	'angulos'=>[$A,$B,$C],
	'tipo_lados'=>lados($a,$b,$c),
	'tipo_angulos'=>tipo($A,$B,$C)
	];
}
function tipo($A, $B, $C) {
	$r='rectangulo ';
		if ($A>90 || $B>90 || $C>90) {
			$r='obtusangulo ';
			}
		
		if($A<90 and $B<90 and $C<90){
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
echo '<pre>';
print_r( triangulo([1,1,1]))."<br>";
echo '</pre>';

?>