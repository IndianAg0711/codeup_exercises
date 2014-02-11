<?php

function error($a, $b) {
	echo "Error. You input $a and $b. Please use numbers." . PHP_EOL;
}

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    echo $a + $b . PHP_EOL;
}	else {
		error($a, $b);

}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    echo $a - $b . PHP_EOL;
}	else {
		error($a, $b);
}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	echo $a * $b . PHP_EOL;
}	else {
		error($a, $b);
}
}

function divide($a, $b) {
	if ($b == 0) {
		echo "You cannot divide by 0!" . PHP_EOL;
	}
		elseif (is_numeric($a) && is_numeric($b)) {
			echo $a / $b . PHP_EOL;
}			else {
				error($a, $b);
}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	echo $a % $b . PHP_EOL;
}	else {
		error($a, $b);
}
}

add('a',5);
subtract(5,2);
multiply(9,'n');
divide(9,0);
modulus(9,2);

?>