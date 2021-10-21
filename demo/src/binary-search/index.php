<?php
function binarySearch($array, $value)
{
    $left = 0;
    $right = count($array)-1;
    while ($left <= $right) {
        $mid = ((int)($left + $right) / 2);
        if ($array[$mid] > $value) {
            $right = $mid - 1;
        } elseif ($array[$mid] < $value) {
            $left = $mid + 1;
        } else {
           return true;
        }
    }
    return false;
}

