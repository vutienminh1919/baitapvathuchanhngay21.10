<?php
function countElement($array,$number):int{
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($number === $array[$i]){
            $count++;
        }
    }
    return $count;
}
