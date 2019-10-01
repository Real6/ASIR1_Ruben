<?php
function calculadora($a, $b){
	$r=null;
	$r=$r.($a + $b). '</br>';
	$r=$r.($a - $b). '</br>';
	$r=$r.($a * $b). '</br>';
	if($b!=0) $r=$r.($a / $b). '</br>';
	return $r;
}
$a= calculadora(27, 0);
echo $a;
?>