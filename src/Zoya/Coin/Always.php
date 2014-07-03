<?php

namespace Zoya\Coin;
/**
 * Class Always
 * @package Zoya\Coin
 */
class Always extends Generic
{
    /**
     * Very lucky :-)
     * @return bool
     */
    protected function checkLuck()
    {
        return true;
    }
}
