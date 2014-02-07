<?php

echo "Please enter a number to start counting from: ";

$begin = fgets(STDIN);

echo "Please enter a number to stop counting at: ";

$end = fgets(STDIN);

$begin = intval($begin);

$end = intval($end);

for ($a = $begin; $a <= $end; $a++) {
	echo "$a\n";
}

?>