<?php

namespace Zoya\Coin;
/**
 * Class Never
 * @package Zoya\Coin
 */
class Never extends Generic
{
    /**
     * @return bool
     */
    protected function checkLuck()
    {
        return false;
    }
}
