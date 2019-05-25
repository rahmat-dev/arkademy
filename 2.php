<?php

function betweenDays($tglAwal, $tglAkhir)
{
	for ($i = $tglAwal; $i <= $tglAkhir; $i++) { 
		echo $i . "\n";
	}
}

betweenDays('2019-11-01', '2019-11-05');

?>