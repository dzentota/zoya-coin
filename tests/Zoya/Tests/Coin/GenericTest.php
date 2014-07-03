<?php

namespace Zoya\Tests\Coin;

class GenericTest extends \PHPUnit_Framework_TestCase
{

    public function testIsLucky()
    {
        $coin = $this->getMockForAbstractClass('\Zoya\Coin\Generic');
        $coin->expects($this->any())->method('checkLuck')->will($this->onConsecutiveCalls(true, false));

        $coin->flip();
        $this->assertTrue($coin->isLucky());
        $this->assertTrue($coin->isLucky());
        $this->assertEquals(\Zoya\Coin\Generic::HEADS, $coin->getCurrentSide());

        $coin->flip();
        $this->assertFalse($coin->isLucky());
        $this->assertFalse($coin->isLucky());
        $this->assertEquals(\Zoya\Coin\Generic::TAILS, $coin->getCurrentSide());
    }


}
