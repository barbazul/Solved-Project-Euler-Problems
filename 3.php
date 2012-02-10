<?php

// Factorizo usando división por tentativa
// http://es.wikipedia.org/wiki/Divisi%C3%B3n_por_tentativa

function factores($n) {

        $p = 2;
	$factores = array();

	while ($p * $p <= $n) {
		if ($n % $p == 0) {
			$factores[] = $p;
			$n = $n / $p;
		} else {
			$p++;
		}
	}

	if ($n != 1) {
		$factores[] = $n;
	}

	return $factores;
}

//$n = 13195;
$n = 600851475143;

$factores = factores($n);
rsort($factores);

echo reset($factores) . "\n";

