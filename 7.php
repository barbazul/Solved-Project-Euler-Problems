<?php

/**
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see 
 * that the 6th prime is 13.
 *
 * What is the 10001st prime number?
 */
 
 $start = microtime(true);
 
 // Usando la criba de Eratostenes 
 // http://en.wikipedia.org/wiki/Sieve_of_Eratosthenes
 
function eratostenes($n)
{
    // Create a list of consecutive integers from 2 to n: (2, 3, 4, ..., n).
    $todos = array();
    $primos = array();
    // Initially, let p equal 2, the first prime number.
    for ($p = 2; $p <= $n; $p++) {
        if (!isset($todos[$p])) {
            $primos[] = $p;
            // Starting from p, count up in increments of p and mark each of 
            // these numbers greater than p itself in the list. These numbers 
            // will be 2p, 3p, 4p, etc.; note that some of them may have already 
            // been marked.
            for ($j = $p; $j <= $n; $j += $p) {
                $todos[$j] = 1;
            }
        }
        // Find the first number greater than p in the list that is not marked. 
        // If there was no such number, stop. Otherwise, let p now equal this 
        // number (which is the next prime), and repeat from step 3.
    }

    return $primos;
}

// Probando repetidas veces conclui que el numero esta entre 100k y 105k
$primos = eratostenes(105000); 
//echo count($primos) . "\n";

echo "$primos[10000]\n";
printf("Resultado obtenido en %.4f segundos\n", microtime(true) - $start);
