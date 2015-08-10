<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        echo preg_replace('{(.)\1+}', '$1', $val);
    }
}
fclose($fh);
