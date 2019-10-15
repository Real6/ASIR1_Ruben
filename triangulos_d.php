<?php
$☺=[
	'lados' => [4,4,4],
	'tipo' => [60,60,60],
	];
function triangulo($☺) {
		return lados(
		$☺['lados'][0],
		$☺['lados'][1],
		$☺['lados'][2],
		).
	tipo(
		$☺['tipo'][0],
		$☺['tipo'][1],
		$☺['tipo'][2],
		);
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
echo triangulo($☺)."<br>";

?>