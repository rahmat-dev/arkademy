<?php

function cetak_gambar($nilai)
{
	$tengah = ceil($nilai/2);

	for ($i=1; $i <= $nilai; $i++) {
		for ($j=1; $j <= $nilai; $j++) { 
			if ($i == 1) {
				echo "x";
			} else if ($i == $nilai) {
				echo "x";
			} else {
				if ($j == $tengah) {
					echo "x";
				} else {
					echo "=";
				}
			}
			echo " ";
		}
		
		echo "<br>";
	}
}

cetak_gambar(5);

echo "<br><br>";

cetak_gambar(7);

?>