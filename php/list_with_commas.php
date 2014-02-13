<?php

function humanized_list($string) {
	$array = explode(', ', $string);
	$last_item = array_pop($array);
	$string = implode(', ', $array);
	$list = $string . ', and ' . $last_item . PHP_EOL;
	return $list;
}
$famous_fake_physicists = "Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Malory, Bruce Banner, Tony Stark";

$list1 = humanized_list($famous_fake_physicists);

echo $list1;
