<?php

function count_vowels($string)
{
	$count = 0;

	for ($i=0; $i < strlen($string); $i++) { 
		if ($string[$i] == 'a' OR $string[$i] == 'i' OR $string[$i] == 'u' OR $string[$i] == 'e' OR $string[$i] == 'o' OR $string[$i] == 'A' OR $string[$i] == 'I' OR $string[$i] == 'U' OR $string[$i] == 'E' OR $string[$i] == 'O') {
			$count++;
		}
	}

	return $count;

}

echo count_vowels("programmer");
// echo count_vowels("hmm..");

?>