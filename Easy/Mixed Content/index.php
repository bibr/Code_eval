<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $list = explode(',', trim($val));
        $stringArray = array();
        $numberArray = array();
        foreach ($list as $var) {
            (is_numeric($var)) ? array_push($numberArray, $var) : array_push($stringArray, $var);
        }
        $print = implode(",", $stringArray) . '|' . implode(',', $numberArray);
        echo trim($print, '|') . PHP_EOL;
    }
}
fclose($fh);
