<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $check = fgets($fh);
    if ($check != "") {
        $column = '';
        do {
            $check -= 1;
            $column = chr(65 + ($check % 26)) . $column;
            $check = floor($check / 26);
        } while ($check > 0);
        echo $column . PHP_EOL;
    }
}
fclose($fh);
