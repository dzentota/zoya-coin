<?php

namespace Zoya\Coin;
use Assert\Assertion;

class Batch extends Generic
{
    protected $batchSize;

    const DEFAULT_BATCH_SIZE = 10;

    /**
     * @param $batchSize
     * @return $this
     */
    public function setBatchSize($batchSize)
    {
        Assertion::integer($batchSize, 'Batch size should be integer');
        Assertion::min($batchSize, 1, 'Batch size should be more than zero');
        $this->batchSize = $batchSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return isset($this->batchSize)? $this->batchSize : self::DEFAULT_BATCH_SIZE;
    }

    /**
     * Returns true every $batchSize time
     * @return bool
     */
    protected function checkLuck()
    {
        if (0 == $this->counter % $this->getBatchSize()) {
            return true;
        }
        return false;
    }

}
