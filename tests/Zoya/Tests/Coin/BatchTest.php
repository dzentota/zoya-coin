<?php

namespace Zoya\Tests\Coin;

use Zoya\Coin\Batch;

class BatchTest extends \PHPUnit_Framework_TestCase
{

    public static function provider()
    {
        return [
            [3], [9], [20], [50]
        ];
    }

    public function testIsLuckyDefault()
    {
        $coin = new Batch();
        for ($i = 1; $i < Batch::DEFAULT_BATCH_SIZE; $i++) {
            $coin->flip();
            $this->assertFalse($coin->isLucky());
        }
        $coin->flip();
        $this->assertTrue($coin->isLucky());
    }

    /**
     * @dataProvider provider
     */
    public function testIsLucky($batchSize)
    {
        $coin = new Batch();
        $coin->setBatchSize($batchSize);
        for ($i = 1; $i < $batchSize; $i++) {
            $coin->flip();
            $this->assertFalse($coin->isLucky());
        }
        $coin->flip();
        $this->assertTrue($coin->isLucky());
    }
}
