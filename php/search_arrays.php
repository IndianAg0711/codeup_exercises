<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function ($name, $array) {
// 	$result = array_search($name, $array);
// 	if (is_int($result)) {
// 		echo "True".PHP_EOL;
// 		return true;
// 	}	else {
// 			echo "False".PHP_EOL;
// 			return false;
// 	}
// }

$array_comp = array_intersect($names, $compare);

$comp_count = count($array_comp);

echo $comp_count . " names in common" . PHP_EOL;

// find('Tina', $names);

// find('Bob', $names);