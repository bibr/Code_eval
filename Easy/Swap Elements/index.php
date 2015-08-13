<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($number, $swap) = explode(" : ", trim($val));
        $numbers = explode(" ", $number);
        $swapArray = explode(", ", $swap);
        foreach ($swapArray as $data) {
            list($firstPos, $secondPos) = explode('-', $data);
            $temp = $numbers[$firstPos];
            $numbers[$firstPos] = $numbers[$secondPos];
            $numbers[$secondPos] = $temp;
        }
        echo join(' ', $numbers) . PHP_EOL;
    }
}
fclose($fh);
