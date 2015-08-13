<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($number, $equation) = explode(' ', trim($val));
        preg_match('[\+|-]', $equation, $op);
        $opPosition = strpos($equation, $op[0]);
        $numberArray = str_split($number);
        $firstNumber = '';
        $secondNumber = '';
        for ($i = 0; $i < count($numberArray); $i++) {
            ($i < $opPosition) ?
                            $firstNumber .= $numberArray[$i] :
                            $secondNumber .= $numberArray[$i];
        }
        echo ($op[0] == '+') ? $firstNumber + $secondNumber : $firstNumber - $secondNumber;
        echo PHP_EOL;
    }
}
fclose($fh);
