<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($n, $m) = explode(',', trim($val));
        while ($n >= $m) {
            $n -= $m;
        }
        echo $n . PHP_EOL;
    }
}
fclose($fh);
