<?php
$handle = fopen("php://stdin", "r");
function timeConversion($s)
{
    // Complete this function

    $seconds = strtotime($s);
    $result  = date("H:i:s", $seconds);
    return $result;

}

fscanf($handle, "%s", $s);
$result = timeConversion($s);
echo $result . "\n";
