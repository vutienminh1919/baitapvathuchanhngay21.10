<?php

use PHPUnit\Framework\TestCase;

include_once "../src/index.php";

class HotelTest extends TestCase
{
    function testHotelMoney()
    {
        $array = [
            [0, 0, 2, 4],
            [1, 2, 5, 0],
            [0, 5, 3, 1]
        ];
        $expected = 19;
        $result = sum($array);
        $this->assertEquals($result, $expected);
    }

    function testHotelMoney2()
    {
        $array = [
            [1, 0, 0, 2],
            [3, 5, 0, 8],
            [0, 0, 4, 6]
        ];
        $expected = 20;
        $result = sum($array);
        $this->assertEquals($result, $expected);
    }
    function testHotelMoney3()
    {
        $array = [
            [0, 0, 0, 0],
            [3, 2, 0, 1],
            [1, 0, 3, 4]
        ];
        $expected = 5;
        $result = sum($array);
        $this->assertEquals($result, $expected);
    }

}