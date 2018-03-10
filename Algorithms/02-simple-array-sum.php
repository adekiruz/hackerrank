<?php
$handle = fopen("php://stdin", "r");
function simpleArraySum($n, $ar)
{
    // Complete this function
    $sum = 0;
    for ($i = $n; $i >= 0; $i--) {
        $sum += $ar[$i];
    }

    return $sum;
}

fscanf($handle, "%i", $n);
$ar_temp = fgets($handle);
$ar      = explode(" ", $ar_temp);
$ar      = array_map('intval', $ar);
$result  = simpleArraySum($n, $ar);
echo $result . "\n";
