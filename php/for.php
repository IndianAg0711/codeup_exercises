<?php

echo "Please enter a number to start counting from: ";

$begin = fgets(STDIN);

$begin = intval($begin);

if ($begin == 0) {
	echo "Error, please enter a number.\n";
	exit(0);
}

echo "Please enter a number to stop counting at: ";

$end = fgets(STDIN);

$end = intval($end);

if ($end == 0) {
	echo "Error, please enter a number.\n";
	exit(0);
}

echo "Please enter a number to count by: ";

$countBy = fgets(STDIN);

$countBy = intval($countBy);

if ($countBy == 0) {
	$countBy = 1;
}

for ($a = $begin; $a <= $end; $a += $countBy) {
	echo "$a\n";
}

?>