<?php

fwrite(STDOUT, "What is your name? ");

$first_name = trim(fgets(STDIN));

fwrite(STDOUT, "Hello $first_name\n");

$game_guess = mt_rand(1, 100);

fwrite(STDOUT, "Guess a number between 1 and 100: ");

$user_guess = fgets(STDIN);

while ($user_guess != $game_guess) {
	if ($user_guess < $game_guess) {
		echo "Higher!\n";
	}
		else {
			echo "Lower!\n";
		}
	echo "Guess again: "	;
	$user_guess = fgets(STDIN);
}
echo "Congrats {$first_name} you've guessed my number!\n";

exit(0);

?>