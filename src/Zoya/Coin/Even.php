<?php

namespace Zoya\Coin;
/**
 * Class Even
 * @package Zoya\Coin
 */
class Even extends Generic
{

    /**
     * Returns true if $this->counter is even
     * @return bool
     */
    protected function checkLuck()
    {
        return (bool)!($this->counter % 2);
    }
}
