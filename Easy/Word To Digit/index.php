<?php

$array = array('one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5,
    'six' => 6, 'seven' => 7, 'eight' => 8, 'nine' => 9, 'zero' => 0);
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $data = explode(';', trim($val));
        foreach ($data as $number) {
            echo $array[$number];
        }
        echo PHP_EOL;
    }
}
fclose($fh);
