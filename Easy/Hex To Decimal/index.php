<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        echo hexdec($val) . PHP_EOL;
    }
}
fclose($fh);
