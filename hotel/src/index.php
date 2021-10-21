<?php
function sum($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($array[$i][$j] == 0)
                continue;
            if($i > 0)
                if($array[$i-1][$j] == 0)
                    continue;
            $sum += $array[$i][$j];


        }
    }
    return $sum;
}

$array = [
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
];
echo sum($array);