<?php

//$n = 10;
$n = 1000;
$sum = 0;

for ($i = 1; $i < $n; $i++) {
	if ($i % 3 == 0 || $i % 5 == 0) {
		$sum += $i;
	}
}

echo "$sum\n";
