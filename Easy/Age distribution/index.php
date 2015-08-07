<?php

$array = array(
    "Still in Mama's arms" => range(0, 2),
    "Preschool Maniac" => range(3, 4),
    "Elementary school" => range(5, 11),
    "Middle school" => range(12, 14),
    "High school" => range(15, 18),
    "College" => range(19, 22),
    "Working for the man" => range(23, 65),
    "The Golden Years" => range(66, 100)
);
$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $test = fgets($fh);
    if ($test != "") {
        $ageRange = "This program is for humans";
        foreach ($array as $key => $val) {
            if (in_array($test, $val))
                $ageRange = $key;
        }
        echo $ageRange . PHP_EOL;
    }
}
fclose($fh);
