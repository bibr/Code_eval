<?php

$define = array('a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4, 'f' => 5,
    'g' => 6, 'h' => 7, 'i' => 8, 'j' => 9);
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $print = '';
        $tempData = str_split($val);
        foreach ($tempData as $data) {
            if (array_key_exists($data, $define)) {
                $print .= $define[$data];
            } else if (is_numeric($data)) {
                $print .= $data;
            }
        }
        echo ($print == '') ? 'NONE' : $print;
        echo PHP_EOL;
    }
}
fclose($fh);
