<?php

namespace Zoya\Tests\Coin;

use Zoya\Coin\Always;

class AlwaysTest extends \PHPUnit_Framework_TestCase
{
    public function testIsLucky()
    {
        $coin = new Always();
        $coin->flip();
        $this->assertTrue($coin->isLucky());
    }
}
