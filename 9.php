<?php

/**
 * A Pythagorean triplet is a set of three natural numbers, a  b  c, for which,
 *
 * a^2 + b^2 = c^2
 * For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
 *
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 * Find the product abc.
 */
 
$start = microtime(true);

$a = 1;
$b = 2;

while (true) {

    $c = 1000 - $a - $b;
    
    if ($a * $a + $b * $b == $c * $c) {
        break;
    }
    
    if ($a + 1 < $b) {
        $a++;
    } else {
        $a = 1;
        $b++;
    }
    
}

echo ($a * $b * $c) . "\n";
printf("Resultado obtenido en %.4f segundos\n", microtime(true) - $start);
