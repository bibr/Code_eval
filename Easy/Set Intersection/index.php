<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = rtrim(fgets($fh));
    if ($val != "") {
        $tempArray = explode(';', $val);
        $array1 = explode(',', $tempArray[0]);
        $array2 = explode(',', $tempArray[1]);
        $result = array_intersect($array1, $array2);
        echo (!empty($result)) ? implode(',', $result) . PHP_EOL : PHP_EOL;
    }
}
fclose($fh);
