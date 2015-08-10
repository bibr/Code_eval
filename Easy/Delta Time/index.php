<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($time1, $time2) = explode(" ", $val);
        $time1 = new DateTime($time1);
        $time2 = new DateTime($time2);
        $interval = $time1->diff($time2);
        echo $interval->format('%H:%I:%S');
        echo PHP_EOL;
    }
}
fclose($fh);
