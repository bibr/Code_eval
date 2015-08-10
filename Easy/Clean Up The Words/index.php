<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        echo preg_replace('/[^a-z]+/', ' ', strtolower(trim($val))) . PHP_EOL;
    }
}
fclose($fh);
