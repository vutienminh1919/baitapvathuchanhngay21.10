<?php

use PHPUnit\Framework\TestCase;

include_once "../src/linear-search/index.php";
include_once "../src/binary-search/index.php";


class LinearTest extends TestCase
{
    function test_linear_search_true()
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $value = 5;
        $result = linearSearch($array, $value);
        $expected = true;
        $this->assertEquals($result, $expected);
    }

    function test_binary_search_true()
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $value = 10;
        $result = BinarySearch($array, $value);
        $expected = true;
        $this->assertEquals($result, $expected);

    }
}