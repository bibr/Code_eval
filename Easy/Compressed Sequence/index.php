<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $numbers = explode(" ", trim($val));
        $count = 0;
        $currentNumber = $numbers[0];
        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] == $currentNumber) {
                $count++;
            } else {
                echo $count . ' ' . $currentNumber . ' ';
                $count = 1;
                $currentNumber = $numbers[$i];
            }
        }
        echo $count . ' ' . end($numbers) . PHP_EOL;
    }
}
fclose($fh);
