<?php
function balancedSums($arr)
{
    $sr = array_sum($arr);
    $sl = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sr -= $arr[$i];
        if ($sl == $sr) {
            return "YES";
        }
        $sl += $arr[$i];
    }
    return "NO";
}