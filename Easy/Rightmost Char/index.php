<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = rtrim(fgets($fh));
    if ($val != "") {
        list($string, $needle) = explode(',', $val);
        $pos = strrpos($string, $needle);
        echo (!empty($pos))? $pos : '-1';
        echo PHP_EOL;
    }
}
fclose($fh);
