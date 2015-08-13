<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $numbers = explode(',', trim($val));
        $echo = 'None';
        foreach (array_count_values($numbers) as $key => $total) {
            if ($total > count($numbers) / 2) {
                $echo = $key;
                break;
            }
        }
        echo $echo . PHP_EOL;
    }
}
fclose($fh);
