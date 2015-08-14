<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($hint, $position) = explode('| ', trim($val));
        $positionArray = explode(' ', $position);
        $hintArray = str_split($hint);
        foreach ($positionArray as $pos) {
            echo $hintArray[$pos - 1];
        }
        echo PHP_EOL;
    }
}
fclose($fh);
