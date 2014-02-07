<?php

echo "Please enter a number to start counting from: ";

$begin = fgets(STDIN);

echo "Please enter a number to stop counting at: ";

$end = fgets(STDIN);

echo "Please enter a number to count by: ";

$countBy = fgets(STDIN);

$countBy = intval($countBy);

$begin = intval($begin);

$end = intval($end);

for ($a = $begin; $a <= $end; $a += $countBy) {
	echo "$a\n";
}

?>