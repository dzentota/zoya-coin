<?php

namespace Zoya\Coin;
use Assert\Assertion;

/**
 * Class Probability
 * @package Zoya\Coin
 */
class Probability extends Generic
{
    protected  $percents;
    const DEFAULT_PERCENTS = 10;

    /**
     * @param $percents
     * @return $this
     */
    public function setPercents($percents)
    {
        Assertion::integer($percents, 'Number of percents should be integer');
        Assertion::min($percents, 1, 'Number of percents should be more than 0');
        Assertion::max($percents, 100, 'Number of percents should not be more than 100');
        $this->percents = $percents;
        return $this;
    }

    /**
     * @return int
     */
    public function getPercents()
    {
        return isset($this->percents)? $this->percents : self::DEFAULT_PERCENTS;
    }

    /**
     * Returns true with $this->percents % probability
     * @return bool
     */
    protected function checkLuck()
    {
        $rnd = rand(1, 100);
        if ($rnd <= $this->getPercents()) {
            return true;
        }
        return false;
    }
}
