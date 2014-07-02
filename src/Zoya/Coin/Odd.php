<?php

namespace Zoya\Coin;

/**
 * Class Odd
 * @package Zoya\Coin
 */
class Odd extends Generic
{
    /**
     * Returns true if $this->counter is odd
     * @return bool
     */
    protected function checkLuck()
    {
        return (bool)($this->counter % 2);
    }
}
