<?php
/**
 * 2520 is the smallest number that can be divided by each of the numbers from 
 * 1 to 10 without any remainder.
 *
 * What is the smallest positive number that is evenly divisible by all of the 
 * numbers from 1 to 20?
 */
 
$start = microtime(true);

// Factorizando los numeros del 1 al 20 y obteniendo la maxima potencia a la que
// aparece cada primo se obtiene:
// 2^4 * 3^2 * 5 * 7 * 11 * 13 * 17 * 19 = 232792560

// Esto fue muy facil. Ahora programaticamente

function is_prime($n) {
    if ($n < 2) return false;
    if ($n == 2) return true;
    if ($n % 2 == 0) return false;
    
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    
    return true;
}

$res = 1;

for ($i = 2; $i <= 20; $i++) {
    if (is_prime($i)) {
        $pow = 1;
        while (pow($i, $pow) <= 20) {
            $pow++;
        }
        
        $pow--;
        
        $res *= pow($i, $pow);
    }
}

echo "$res\n";
printf("Resultado obtenido en %.4f segundos\n", microtime(true) - $start);
