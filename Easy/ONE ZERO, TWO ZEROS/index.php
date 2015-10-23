<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($zeros, $range) = explode(' ', trim($val));
        $count = 0;
        for ($i = 1; $i <= $range; $i++) {
            if (substr_count(decbin($i), '0') == $zeros)
                $count++;
        }
        echo $count;
        echo PHP_EOL;
    }
}
fclose($fh);