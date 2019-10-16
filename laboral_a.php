<?php


for($i=1;$i<366;$i++){
	$r[]=[
	'n'=>$i,
	's'=>round($i/7)+1,
	'fecha'=>date('Y-m-d',strtotime('2019-01-01')+($i-1)*24*60*60),
	'D'=>date('D',strtotime('2019-01-01')+($i-1)*24*60*60),
	];
}

foreach($r as $f){
	echo '<tr>'."<br>";
	
	echo '<td>'."<br>";
	echo $f['n'];
	echo '</td>';	

	echo '<td>'."<br>";
	echo $f['s'];
	echo '</td>';
	
	echo '<td>'."<br>";
	echo $f['fecha'];
	echo '</td>';	

	echo '<td>'."<br>";
	echo $f['D'];
	echo '</td>';	
	
	echo '</tr>';
}
?>