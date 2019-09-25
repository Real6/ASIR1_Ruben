Holi
<a href="http://192.168.0.83/asir1-david/asir1.php"> David </a>
<?php
$file = fopen ("visitas.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
echo fwrite($file,$ip."\r\n");
fclose($file);
?>