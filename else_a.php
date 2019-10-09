<?php

function note($x) {
		$r=null;
		if ($x>=5) {
			$r="Apto";
		}else {
			$r= "No Apto";
	}
	return $r;
}
echo note(1)."<br>";
echo note(5)."<br>";
echo note(8)."<br>";

?>