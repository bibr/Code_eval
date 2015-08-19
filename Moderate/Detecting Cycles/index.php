<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $numberList = explode(" ", trim($val));
        $pointer = 0;
        $checker = $pointer + 1;
        $cycle = array();
        while ($pointer <= (count($numberList) - 2)) {
            
            if ($numberList[$pointer] == $numberList[$checker] && !in_array($numberList[$pointer], $cycle)) {
                $cycle[] = $numberList[$pointer];
                $pointer++;
            } else if ($checker >= (count($numberList) - 1)) {
                $pointer++;
                $checker = $pointer + 1;
            } else {
                $checker++;
            }
        }

        echo join(' ', $cycle) . PHP_EOL;
    }
}
fclose($fh);
