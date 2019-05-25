<?php

function ganti_kata($string, $old, $new)
{
	for ($i=0; $i < strlen($string); $i++) { 
		if ($string[$i] == $old) {
			$string[$i] = $new;
		}

		echo $string[$i];
	}

}

ganti_kata("purwakerta", 'a', 'o');

?>