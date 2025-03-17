<?php

function inverter($x)
{
    if ($x == 0) {
        throw new Exception('Divisão por zero.');
    }
    return 1 / $x;
}
