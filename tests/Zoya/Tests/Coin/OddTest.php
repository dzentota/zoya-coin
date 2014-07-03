<?php

namespace Zoya\Tests\Coin;

use Zoya\Coin\Odd;

class OddTest extends \PHPUnit_Framework_TestCase
{

    public static function provider()
    {
        return [
            [1, true], [2, false], [10, false], [11, true]
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testIsLucky($flips, $expected)
    {
        $coin = new Odd();
        for ($i = 0; $i < $flips; $i++) {
            $coin->flip();
        }
        $this->assertEquals($expected, $coin->isLucky());
    }
}
