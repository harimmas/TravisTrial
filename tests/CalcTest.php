<?php

use PHPUnit\Framework\TestCase;
use Sample\Calc;

class CalcTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calc();
        $this->assertEquals($calc->add(1,2),3);
    }
    // テストメソッドは testXXX() という名前にする
    public function testSub()
    {
        $calc = new Calc();
        $this->assertEquals($calc->sub(3, 2), 1);
    }
    public function testTimes()
    {
        $calc = new Calc();
        $this->assertEquals($calc->times(3, 2), 6);
    }
    public function testDvidedBy()
    {
        $calc = new Calc();
        $this->assertEquals($calc->devidedBy(6, 2), 3);
    }
    public function testDvidedBy0()
    {
        $calc = new Calc();
        $this->assertEquals($calc->devidedBy(6, 0), 3);
    }

}
?>