<?php

/**
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we 
 * get 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */

$start = microtime(true);

//$n = 10;
$n = 1000;
$sum = 0;

for ($i = 1; $i < $n; $i++) {
	if ($i % 3 == 0 || $i % 5 == 0) {
		$sum += $i;
	}
}

echo "$sum\n";
printf("Resultado obtenido en %.4f segundos\n", microtime(true) - $start);
