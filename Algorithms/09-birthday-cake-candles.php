<?php
$handle = fopen("php://stdin", "r");
function birthdayCakeCandles($n, $ar)
{
    // Complete this function
    rsort($ar);
    $tallest = $ar[0];
    $num     = 0;
    for ($i = 0; $i < count($ar); $i++) {
        if ($ar[$i] != $tallest) {
            break;
        }

        $num++;
    }
    echo $num;
}

fscanf($handle, "%i", $n);
$ar_temp = fgets($handle);
$ar      = explode(" ", $ar_temp);
$ar      = array_map('intval', $ar);
$result  = birthdayCakeCandles($n, $ar);
echo $result . "\n";
