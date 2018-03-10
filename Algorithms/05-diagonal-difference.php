<?php
$handle = fopen("php://stdin", "r");
function diagonalDifference($a)
{
    // Complete this function
    $in1    = 0;
    $in2    = count($a);
    $first  = 0;
    $second = 0;
    for ($i = 0; $i < count($a); $i++) {
        $in2--;
        $first += $a[$i][$in1];
        $second += $a[$i][$in2];
        $in1++;
    }
    echo abs($first - $second);
}

fscanf($handle, "%i", $n);
$a = array();
for ($a_i = 0; $a_i < $n; $a_i++) {
    $a_temp  = fgets($handle);
    $a[]     = explode(" ", $a_temp);
    $a[$a_i] = array_map('intval', $a[$a_i]);
}
$result = diagonalDifference($a);
echo $result . "\n";
