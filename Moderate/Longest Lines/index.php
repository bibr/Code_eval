<?php

$fh = fopen($argv[1], "r");
$values = array();
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $values[] = trim($val);
    }
}
fclose($fh);

$totalWords = $values[0];
array_shift($values);
usort($values, 'lensort');

for ($i = 0; $i < $totalWords; $i++) {
    echo $values[$i] . PHP_EOL;
}

function lensort($a, $b) {
    return strlen($b) - strlen($a);
}
