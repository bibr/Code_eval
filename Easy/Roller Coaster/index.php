<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $allChar = str_split(trim($val));
        $upperCase = true;
        foreach ($allChar as $char) {
            if (ctype_alpha($char)) {
                echo changeCase($char, $upperCase);
                $upperCase = !$upperCase;
            } else {
                echo $char;
            }
        }
        echo PHP_EOL;
    }
}
fclose($fh);

function changeCase($char, $boolean) {
    return ($boolean) ? strtoupper($char) : strtolower($char);
}
