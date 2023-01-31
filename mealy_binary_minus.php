<?php
function mealy_binary_minus($input1, $input2) {
    $state = "start";
    $diff = "";
    $borrow = "0";
    $len1 = strlen($input1);
    $len2 = strlen($input2);
    $max_len = max($len1, $len2);
    for ($i = 1; $i <= $max_len; $i++) {
        $a = $i <= $len1 ? $input1[$len1 - $i] : "0";
        $b = $i <= $len2 ? $input2[$len2 - $i] : "0";
        if ($state == "start") {
            if ($a == "1" && $b == "0") {
                $diff = "1" . $diff;
            } elseif ($a == "0" && $b == "1") {
                $state = "borrow";
                $diff = "1" . $diff;
            } else {
                $diff = "0" . $diff;
            }
        } elseif ($state == "borrow") {
            if ($a == "0" && $b == "0") {
                $state = "borrow";
                $diff = "1" . $diff;
            } else {
                $state = "start";
                $diff = "0" . $diff;
            }
        }
    }
    while (strlen($diff) > 1 && $diff[0] == "0") {
        $diff = substr($diff, 1);
    }
    return $diff;
}

$input1 = "1101";
$input2 = "1010";
echo mealy_binary_minus($input1, $input2) . PHP_EOL; // "0011"
