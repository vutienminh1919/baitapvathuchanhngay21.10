<?php
function linearSearch($array,$value)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($value == $array[$i]) {
            return true;
        }
    }
    return false;
}
$array = [1,2,3,4,5,6,7];
$number = 1;
echo linearSearch($array,$number);


