<?php
function mealy_minus($inputs) {
    $state = "start";
    $diff = 0;
    $first = true;
    $num_buffer = '';
    foreach (str_split($inputs) as $i) {
        if ($state == "start") {
            if ($i == "-") {
                $state = "subtract";
            } else {
                $num_buffer .= $i;
            }
        } elseif ($state == "subtract") {
            if ($first) {
                $diff = intval($num_buffer);
                $first = false;
            } else {
                $diff -= intval($num_buffer);
            }
            $num_buffer = '';
            $state = "start";
        }
    }
    if ($num_buffer !== '') {
        if ($first) {
            $diff = intval($num_buffer);
            $first = false;
        } else {
            $diff -= intval($num_buffer);
        }
    }
    return $diff;
}

$inputs = "100-50-25";
echo mealy_minus($inputs) . PHP_EOL; // 25
