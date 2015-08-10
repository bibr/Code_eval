<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = rtrim(fgets($fh));
    if ($val != "") {
        echo sizeof((getOnlyUniqueArray($val)));
        echo PHP_EOL;
    }
}
fclose($fh);

function getOnlyUniqueArray($string) {
    return array_unique(str_split($string));
}
