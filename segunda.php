<?php 

$salariohora = 7;
$horas = 180;
$dep = 4;

$salariohora = $salariohora*$horas;
	if ($salariohora <= 1000){
	echo "INSS ".$salariohora*8.5/100;
}elseif ($salariohora > 1000){
	echo "INSS ".$salariohora*9/100;
}


 ?>