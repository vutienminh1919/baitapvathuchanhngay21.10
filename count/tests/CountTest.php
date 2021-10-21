<?php
use PHPUnit\Framework\TestCase;
include_once "../src/index.php";
class CountTest extends TestCase
{
function testHowManyTimeElementAppearInArray(){
    $array = [1,2,3,5,4,3,6,8,3,1,4,3,5,6,6,8];
    $number = 1;
    $expected = 2;
    $result = countElement($array,$number);
    $this->assertEquals($result,$expected);
}
}