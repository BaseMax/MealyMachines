<?php
function mealy_binary_sum($input1, $input2) {
    $state = "start";
    $sum = "";
    $carry = "0";
    $len1 = strlen($input1);
    $len2 = strlen($input2);
    $max_len = max($len1, $len2);
    for ($i = 1; $i <= $max_len; $i++) {
        $a = $i <= $len1 ? $input1[$len1 - $i] : "0";
        $b = $i <= $len2 ? $input2[$len2 - $i] : "0";
        if ($state == "start") {
            if ($a == "1" && $b == "1") {
                $state = "carry";
                $sum = "0" . $sum;
            } elseif ($a == "1" || $b == "1") {
                $sum = "1" . $sum;
            } else {
                $sum = "0" . $sum;
            }
        } elseif ($state == "carry") {
            if ($a == "1" && $b == "1") {
                $state = "carry";
                $sum = "1" . $sum;
            } elseif ($a == "1" || $b == "1") {
                $state = "start";
                $sum = "0" . $sum;
            } else {
                $state = "start";
                $sum = "1" . $sum;
            }
        }
    }
    if ($state == "carry") {
        $sum = "1" . $sum;
    }
    return $sum;
}

$input1 = "1101";
$input2 = "1010";
echo mealy_binary_sum($input1, $input2) . PHP_EOL; // "10111"
