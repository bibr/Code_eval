<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $array = explode(" ", trim($val));
        echo $array[count($array) - 2] . PHP_EOL;
    }
}
fclose($fh);
