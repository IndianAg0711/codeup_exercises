<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

unset($nothing);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function checkSet($a) {
	if (empty($a)) {
		return true;
	}
		else {
			return false;
		}
}

if (checkSet($nothing)) {
	echo "\$nothing is set\n";
}	else {
	echo "\$nothing is empty\n";
}


if (checkSet($something)) {
	echo "\$something is set\n";
}	else {
	echo "\$something is empty\n";
}


if (checkSet($array)) {
	echo "\$array is set\n";
}	else {
	echo "\$array is empty\n";
}


// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results