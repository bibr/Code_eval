<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($o, $p, $q, $r) = explode(' ', trim($val));
        $direction = '';

        if ($p < $r) {
            $direction .= 'N';
        } else if ($p > $r) {
            $direction .= 'S';
        }

        if ($o < $q) {
            $direction .= 'E';
        } else if ($o > $q) {
            $direction .= 'W';
        }
        echo (empty($direction)) ? 'here' : $direction;
        echo PHP_EOL;
    }
}
fclose($fh);
