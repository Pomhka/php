<?php
$a = 1;
$b = 2;
$c = 3;
$d = $b - $a;
$f = $c - $b;
if ($d === $f) {
echo "числа последовательны";
} else {
    echo "числа не последовательны";
}