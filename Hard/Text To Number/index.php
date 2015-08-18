<?php

class Number {

    private $negative = 1;
    private $million = 0;
    private $hundred = 0;
    private $thousand = 0;
    private $tens = 0;
    private $ones = 0;
    private $numbers = array(
        'zero' => 0,
        'one' => 1,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9,
        'ten' => 10,
        'eleven' => 11,
        'twelve' => 12,
        'thirteen' => 13,
        'fourteen' => 14,
        'fifteen' => 15,
        'sixteen' => 16,
        'seventeen' => 17,
        'eighteen' => 18,
        'nineteen' => 19,
        'twenty' => 20,
        'thirty' => 30,
        'forty' => 40,
        'fifty' => 50,
        'sixty' => 60,
        'seventy' => 70,
        'eighty' => 80,
        'ninety' => 90
    );
    private $wordsArray;

    function __construct($words) {
        $this->wordsArray = explode(' ', $words);
    }

    function generateNumber() {
        foreach ($this->wordsArray as $words) {
            $this->checkWord($words);
        }
        return $this->addAll();
    }

    private function addAll() {
        return $this->negative *
                ($this->million + $this->thousand + $this->hundred + $this->tens + $this->ones);
    }

    private function reset($ones, $hundreds, $thousand) {
        $this->ones = $ones;
        $this->hundred = $hundreds;
        $this->thousand = $thousand;
    }

    private function checkWord($word) {
        switch ($word) {
            case 'negative':
                $this->negative = -1;
                break;
            case 'hundred':
                $this->hundred = $this->ones * 100;
                $this->reset(0, $this->hundred, $this->thousand);
                break;
            case 'thousand':
                $this->thousand = ($this->hundred + $this->ones) * 1000;
                $this->reset(0, 0, $this->thousand);
                break;
            case 'million':
                $this->million = ($this->thousand + $this->hundred + $this->ones) * 1000000;
                $this->reset(0, 0, 0);
                break;
            default :
                $this->ones = $this->numbers[$word] + $this->ones;
                break;
        }
    }

}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        $obj = new Number(trim($val));
        echo $obj->generateNumber() . PHP_EOL;
    }
}
fclose($fh);
