<?php
$x=array(
	'ene',
	'feb',
	'mar',
	'abr',
	'may',
	'jun',
	'jul',
	'ago',
	'sep',
	'oct',
	'nov',
	'dic');
	
for($i=0; $i<12; $i++)
echo $x[$i]."<br>";

foreach ($x as $value) {
    echo "$value <br>";
	};
	
function mes($n){
	$x=[
	'ene',
	'feb',
	'mar',
	'abr',
	'may',
	'jun',
	'jul',
	'ago',
	'sep',
	'oct',
	'nov',
	'dic'
	];
	return $x[$n-1];
}
echo mes(1)."<br>";
echo mes(8)."<br>";
?>