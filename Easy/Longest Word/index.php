<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $words = explode(' ', trim($val));
        $temp = '';
        foreach ($words as $key => $word) {
            if (strlen($word) > strlen($temp)) {
                $temp = $word;
            }
        }
        echo $temp . PHP_EOL;
    }
}
fclose($fh);
