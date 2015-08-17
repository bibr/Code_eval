<?php

$possibleArray = array('>>-->', '<--<<');
$arrowLength = 5;
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $brokenArray = str_split(trim($val));
        $total = 0;
        for ($i = 0; $i <= count($brokenArray) - $arrowLength; $i++) {
            $total = ( in_array(join("", array_slice($brokenArray, $i, $arrowLength)), $possibleArray)) ?
                    $total + 1 :
                    $total;
        }
        echo $total;
        echo PHP_EOL;
    }
}
fclose($fh);
