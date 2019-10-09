<?php

function mes($n){
	$x=[
	[
	'Mes'=>'ene',
	'dias'=> '31',
	'estacion'=>'Invierno',
	],[
	'Mes'=>'Feb',
	'dias'=> '28',
	'estacion'=>'Invierno',
	],[
	'Mes'=>'Mar',
	'dias'=> '31',
	'estacion'=>'Invierno',
	],[
	'Mes'=>'Abr',
	'dias'=> '30',
	'estacion'=>'Primavera',
	],[
	'Mes'=>'may',
	'dias'=> '31',
	'estacion'=>'Primavera',
	],[
	'Mes'=>'jun',
	'dias'=> '30',
	'estacion'=>'Primavera',
	],[
	'Mes'=>'jul',
	'dias'=> '31',
	'estacion'=>'Verano',
	],[
	'Mes'=>'Ago',
	'dias'=> '31',
	'estacion'=>'Verano',
	],[
	'Mes'=>'Sep',
	'dias'=> '30',
	'estacion'=>'Verano',
	],[
	'Mes'=>'Oct',
	'dias'=> '31',
	'estacion'=>'Otoño',
	],[
	'Mes'=>'Nov',
	'dias'=> '30',
	'estacion'=>'Otoño',
	],[
	'Mes'=>'Dic',
	'dias'=> '31',
	'estacion'=>'Invierno',
	]
	];
	$r=null;
	$r=$r.$x[$n-1]['Mes']."<br>";
	$r=$r.$x[$n-1]['dias']."<br>";
	$r=$r.$x[$n-1]['estacion']."<br>";
	return $r;
}
echo mes(1)."<br>";
echo mes(8)."<br>";
?>