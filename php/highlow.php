<?php

$min = $argv[1];
$max = $argv[2];


if (($argc == 3) && ($argv[1] < $argv[2]) && (is_numeric($argv[1])) && (is_numeric($argv[2]))) {
} else {
	echo "Error: User did not set min/max. Defaults used: 1 and 100\n";
	$min = 1;
	$max = 100;
}

fwrite(STDOUT, "What is your name? ");

$first_name = trim(fgets(STDIN));

fwrite(STDOUT, "Hello $first_name\n");

$game_guess = mt_rand($min, $max);

fwrite(STDOUT, "Guess a number between $min and {$max}: ");

$user_guess = fgets(STDIN);

$numGuess = 0;

$numGuess++;

while ($user_guess != $game_guess) {
	if ($user_guess < $game_guess) {
		echo "Higher!\n";
	}
		else {
			echo "Lower!\n";
		}
	echo "Guess again: "	;
	$user_guess = fgets(STDIN);
	$numGuess++;
}

echo "Congrats {$first_name} you've guessed my number!\n";

echo "It took you $numGuess guesses\n";

	if ($numGuess <= 5) {
		echo "You're an effin champ!\n";
	}
		else {
			echo "You're average.\n";
		}

exit(0);

?>