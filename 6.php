<?php

/**
 * The sum of the squares of the first ten natural numbers is,
 *
 * 12 + 22 + ... + 102 = 385
 * The square of the sum of the first ten natural numbers is,
 *
 * (1 + 2 + ... + 10)2 = 552 = 3025
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025  385 = 2640.
 *
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */

//$n = 10;
$n = 100;
$sum = 0;
$sum_of_squares = 0;

for ($i = 1; $i <= $n; $i++) {
	$sum += $i;
	$sum_of_squares += pow($i, 2);
}

echo abs($sum_of_squares - pow($sum, 2)) . "\n";
