<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $highestArray = array();
        $rows = array_map(
                function($row) {
            return explode(' ', $row);
        }, explode(' | ', trim($val))
        );

        for ($i = 0; $i < sizeof($rows); $i++) {
            for ($j = 0; $j < sizeof($rows[$i]); $j++) {
                if (!isset($highestArray[$j]) || $highestArray[$j] < $rows[$i][$j]) {
                    $highestArray[$j] = $rows[$i][$j];
                }
            }
        }
        echo join(' ', $highestArray) . PHP_EOL;
    }
}
fclose($fh);
