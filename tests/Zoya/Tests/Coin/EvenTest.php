<?php

namespace Zoya\Tests\Coin;

use Zoya\Coin\Even;

class EvenTest extends \PHPUnit_Framework_TestCase
{

    public static function provider()
    {
        return [
            [1, false], [2, true], [10, true], [11, false]
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testIsLucky($flips, $expected)
    {
        $coin = new Even();
        for ($i = 0; $i < $flips; $i++) {
            $coin->flip();
        }
        $this->assertEquals($expected, $coin->isLucky());
    }
}
