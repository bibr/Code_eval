<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = rtrim(fgets($fh));
    if ($val != "") {
        $tempArray = str_split($val);
        $total = sizeof($tempArray);
        $totalUpper = 0;
        $totalLower = 0;
        foreach ($tempArray as $char) {
            (ctype_upper($char)) ? $totalUpper++ : $totalLower++;
        }
        echo "lowercase: " . number_format((($totalLower / $total) * 100), 2, '.', '') . " uppercase: " . number_format((($totalUpper / $total) * 100), 2, '.', '');
        echo PHP_EOL;
    }
}
fclose($fh);
