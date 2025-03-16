<?php
function fatorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

echo 'O fatorial de 5 é ' . fatorial(5);
