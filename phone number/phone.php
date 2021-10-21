<?php
function check($string)
{
    $str = substr($string, 0, 3);
    switch ($str) {
        case "032":
        case "033":
        case "034":
        case "035":
        case "036":
        case "037":
        case "038":
        case "039":
            return 1;
        case "070":
        case "079":
        case "078":
        case "077":
        case "076":
            return 2;
        case "081":
        case "082";
        case "083":
        case "084":
        case "085":
            return 3;
    }
}
