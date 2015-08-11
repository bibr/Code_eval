<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $temp = explode('; ', rtrim(trim($val), ';'));
        $place = array();
        $distance = array();
        foreach ($temp as $array) {
            list($place[], $distance[]) = explode(',', $array);
        }
        sort($distance);
        echo $distance[0] . ',';
        for ($i = 1; $i < sizeof($distance); $i++) {
            echo $distance[$i] - $distance[$i - 1];
            echo ($i < sizeof($distance) - 1) ? ',' : '';
        }
        echo PHP_EOL;
    }
}
fclose($fh);
