<?php

require '/var/www/xhgui/external/header.php';

function fib($n)
{
    if ($n < 2) {
        return $n;
    }

    return fib($n - 2) + fib($n - 1);
}

for ($i = 0; $i <= 30; $i++) {
    printf("<p>fib(%d) = %d<p>\n", $i, fib($i));
}
