<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($list1, $list2) = explode(' | ', trim($val));
        $numberList1 = explode(' ', $list1);
        $numberList2 = explode(' ', $list2);
        $print = '';
        for ($i = 0; $i < count($numberList1); $i++) {
            $print .= $numberList1[$i] * $numberList2[$i] . ' ';
        }
        echo trim($print) . PHP_EOL;
    }
}
fclose($fh);
