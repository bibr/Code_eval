<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($wineList, $keyList) = explode(' | ', trim($val));
        $wines = explode(' ', $wineList);
        $keys = str_split($keyList);
        $print = array();
        foreach ($wines as $wine) {
            if (checkIfKeyExists($wine, $keys)) {
                $print[] = $wine;
            }
        }
        echo (empty($print)) ?
                'False' . PHP_EOL :
                implode(' ', $print) . PHP_EOL;
    }
}
fclose($fh);

function checkIfKeyExists($word, $keys) {
    $return = true;
    foreach ($keys as $key) {
        $pos = strpos($word, $key);
        if ($pos === false) {
            $return = false;
            break;
        } else {
            $word = substr_replace($word, '', $pos, 1);
        }
    }
    return $return;
}
