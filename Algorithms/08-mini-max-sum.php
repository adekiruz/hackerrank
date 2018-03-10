<?php
$handle = fopen("php://stdin", "r");
function miniMaxSum($arr)
{
    // Complete this function
    $arrayCount = count($arr);
    $min        = 0;
    $max        = 0;
    sort($arr);

    for ($i = 0; $i < ($arrayCount - 1); $i++) {
        $min += $arr[$i];
    }

    for ($i = ($arrayCount - 1); $i > ($arrayCount - 5); $i--) {
        $max += $arr[$i];
    }

    echo $min . " " . $max;
}

$arr_temp = fgets($handle);
$arr      = explode(" ", $arr_temp);
$arr      = array_map('intval', $arr);
miniMaxSum($arr);
