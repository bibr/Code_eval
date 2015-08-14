<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($word, $hint) = explode(';', trim($val));
        $wordArray = explode(' ', $word);
        $hintArray = explode(' ', $hint);
        $data = array();
        $echo = '';
        for ($i = 0; $i < sizeof($hintArray); $i++) {
            $data[$hintArray[$i]] = $wordArray[$i];
        }

        for ($j = 1; $j <= count($wordArray); $j++) {
            $echo .= (isset($data[$j])) ?
                    $data[$j] . ' ' :
                    $wordArray[count($wordArray) - 1] . ' ';
        }
        echo trim($echo) . PHP_EOL;
    }
}
fclose($fh);
