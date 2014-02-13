<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function find($name, $array) {
	$result = array_search($name, $array);
	if (is_int($result)) {
		echo "True".PHP_EOL;
		return true;
	}	else {
			echo "False".PHP_EOL;
			return false;
	}
}

find('Tina', $names);

find('Bob', $names);