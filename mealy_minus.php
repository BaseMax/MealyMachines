<?php
function mealy_minus($inputs) {
    $state = "start";
    $diff = 0;
    foreach (str_split($inputs) as $i) {
        if ($state == "start") {
            if ($i == "-") {
                $state = "subtract";
            } else {
                $diff = $diff * 10 + intval($i);
            }
        } elseif ($state == "subtract") {
            $diff -= intval($i);
            $state = "start";
        }
    }
    return $diff;
}

$inputs = "100-50-25";
echo mealy_minus($inputs) . PHP_EOL; // 25
