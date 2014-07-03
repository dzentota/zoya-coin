<?php

namespace Zoya\Tests\Coin;

use Zoya\Coin\Fibonacci;

class FibonacciTest extends \PHPUnit_Framework_TestCase
{

    public static function provider()
    {
        return [
            [1, true], [2, true], [3, true], [4, false], [5, true], [6, false], [7, false], [8, true]
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testIsLucky($flips, $expected)
    {
        $coin = new Fibonacci();
        for ($i = 0; $i < $flips; $i++) {
            $coin->flip();
        }
        $this->assertEquals($expected, $coin->isLucky());
    }
}
