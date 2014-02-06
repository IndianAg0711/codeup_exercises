<?php

$x = 2;

do {
	echo "$x\n";
	$x = $x * $x;
} while ($x < 1000000);