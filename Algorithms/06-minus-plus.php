<?php
$handle = fopen("php://stdin", "r");
function plusMinus($arr)
{
    // Complete this function
    $arrayCount   = count($arr);
    $positifCount = 0;
    $negatifCount = 0;
    $zeroNumCount = 0;
    for ($i = 0; $i < $arrayCount; $i++) {
        if ($arr[$i] > 0) {
            $positifCount++;
        }

        if ($arr[$i] < 0) {
            $negatifCount++;
        }

        if ($arr[$i] == 0) {
            $zeroNumCount++;
        }

    }
    echo ($positifCount / $arrayCount) . "\n";
    echo ($negatifCount / $arrayCount) . "\n";
    echo ($zeroNumCount / $arrayCount);
}

fscanf($handle, "%i", $n);
$arr_temp = fgets($handle);
$arr      = explode(" ", $arr_temp);
$arr      = array_map('intval', $arr);
plusMinus($arr);
