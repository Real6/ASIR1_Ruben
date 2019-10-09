<?php

function note($x) {
		$r='sobresaliente';
		if ($x<8.5) {
			$r='notable';
		}if ($x<7)			{
			$r= 'aprobado';
	}
	if ($x<5)			{
			$r= 'pendiente';
	}
	return $r;
}
echo note(4)."<br>";
echo note(7)."<br>";
echo note(9)."<br>";

?>