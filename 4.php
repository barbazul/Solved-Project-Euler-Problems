<?php

/**
 * A palindromic number reads the same both ways. The largest palindrome made 
 * from the product of two 2-digit numbers is 9009 = 91 99.
 *
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

$start = microtime(true);

/* 
// Fuerza bruta
$max = 0;
for ($i = 999; $i >= 100; $i--) {
    for ($j = $i; $j >= 100; $j--) {
        $n = $i * $j;
        if ($n == strrev($n)) {
            $max = max($n, $max);
        }
    }
}

echo "$max\n";
*/

// 999 * 999 = 99801 es el maximo numero que se puede formar multiplicando 2 
// numeros de 3 digitos
// El minimo es 100 * 100 = 10000
// Es decir que lo mas probable es que el resultado tenga 6 digitos, o en su
// defecto, 5

// Un palindromo de 6 digitos es de la forma abccba
// 0 <= a <= 9 & 0 <= b <= 9 & 0 <= c <= 9
// palindromo = 100000 * a + 10000 * b + 1000 * c + 100 * c + 10 * b + a
// palindromo = 100001 * a + 10010 * b + 1100 * c
// palindromo = 11 * (9091a + 910b + 100c)
// x lo tanto el palindromo es multiplo de 11
// El mayor numero de 3 digitos multiplo de 11 es el 990
// Ahora: fuerza bruta, pero con menos valores

$max = 0;
for ($i = 999; $i >= 100; $i--) {
    for ($j = 990; $j >= 100; $j-=11) {
        $n = $i * $j;
        if ($n == strrev($n)) {
            $max = max($n, $max);
        }
    }
}

echo "$max\n";
printf("Resultado obtenido en %.4f segundos\n", microtime(true) - $start);
