<?php
$handle = fopen("php://stdin", "r");
function solve($a0, $a1, $a2, $b0, $b1, $b2)
{
    // Complete this function
    $alice = 0;
    $bob   = 0;
    for ($i = 0; $i < 3; $i++) {
        if (${"a" . $i} > ${"b" . $i}) {
            $alice += 1;
        }

        if (${"a" . $i} == ${"b" . $i}) {
            $alice += 0;
            $bob += 0;
        }
        if (${"a" . $i} < ${"b" . $i}) {
            $bob += 1;
        }

    }
    return [$alice, $bob];
}

fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = solve($a0, $a1, $a2, $b0, $b1, $b2);
echo implode(" ", $result) . "\n";
