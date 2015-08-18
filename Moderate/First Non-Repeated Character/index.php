<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $charCount = array_count_values(str_split($val));
        foreach ($charCount as $char => $number) {
            if ($number == 1) {
                echo $char . PHP_EOL;
                break;
            }
        }
    }
}
fclose($fh);
