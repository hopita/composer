<?php
class HolaAmparoClassTest extends \PHPUnit_Framework_TestCase
{
    public function test_nothingTest()
    {
        $a = new HolaAmparoClass();
        $b=$a->sayHallo();
        echo $b;
    }
}