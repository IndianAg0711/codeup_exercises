<?php

echo "Please enter a number to start counting from: ";

$begin = fgets(STDIN);

echo "Please enter a number to stop counting at: ";

$end = fgets(STDIN);

echo "Please enter a number to count by: ";

$countBy = fgets(STDIN);

$begin = intval($begin);

$end = intval($end);

if (!is_numeric($countBy)) {
	$countBy = 1;
}	else {
	$countBy = intval($countBy);
}

for ($a = $begin; $a <= $end; $a += $countBy) {
	echo "$a\n";
}

?>