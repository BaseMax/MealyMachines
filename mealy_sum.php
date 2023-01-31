<?php
function mealy_sum($inputs) {
    $state = "start";
    $sum = 0;
    foreach (str_split($inputs) as $i) {
        if ($state == "start") {
            if ($i == "+") {
                $state = "add";
            } else {
                $sum = $sum * 10 + intval($i);
            }
        } elseif ($state == "add") {
            $sum += intval($i);
            $state = "start";
        }
    }
    return $sum;
}

$inputs = "11+22+33";
echo mealy_sum($inputs) . PHP_EOL; // 66
