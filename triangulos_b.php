<?php

function tipo($x, $y, $z) {
	$r='rectangulo';
		if ($x>90 || $y>90 || $z>90) {
			$r='obtusangulo';
			}
		
		if($x<90 and $y<90 and $z<90){
			$r='acutangulo';
	}
	return $r;
}
echo tipo(40,60,80)."<br>";
echo tipo(50,30,90)."<br>";
echo tipo(60,50,70)."<br>";
?>