<?php
function mealy_sum($inputs) {
    $state = "start";
    $sum = 0;
    $num = 0;
    foreach (str_split($inputs) as $i) {
        if ($state == "start") {
            if ($i == "+") {
                $state = "add";
                $sum += $num;
                $num = 0;
            } else {
                $num = $num * 10 + intval($i);
            }
        } elseif ($state == "add") {
            $num = intval($i);
            $state = "start";
        }
    }
    $sum += $num;
    return $sum;
}

$inputs = "11+22+33";
echo mealy_sum($inputs) . PHP_EOL; // 66
