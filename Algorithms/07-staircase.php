<?php
$handle = fopen("php://stdin", "r");
function staircase($n)
{
    // Complete this function
    for ($i = 1; $i <= $n; $i++) {
        for ($s = ($n - $i); $s >= 1; $s--) {
            echo " ";
        }
        for ($h = 1; $h <= $i; $h++) {
            echo "#";
        }
        echo "\n";
    }
}

fscanf($handle, "%i", $n);
staircase($n);
