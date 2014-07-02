<?php

namespace Zoya\Coin;

/**
 * Class Random
 * @package Zoya\Coin
 */
class Random extends Generic
{

    /**
     * @return bool
     */
    protected function checkLuck()
    {
        $probability = rand(1, 100);
        $rnd = rand(1, 100);
        if ($rnd <= $probability) {
            return true;
        }
        return false;
    }

}
