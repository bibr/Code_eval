<?php
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $arrayNumber = str_split(trim($val));
        $selfDescribingNumbers = true;
        for ($i = 0; $i < count($arrayNumber); $i++) {
            if ($arrayNumber[$i] != substr_count($val, $i)) {
                $selfDescribingNumbers = false;
            }
        }
        echo ($selfDescribingNumbers) ?
                '1' :
                '0';
        echo PHP_EOL;
    }
}
fclose($fh);
