<?php
namespace Zoya\Coin;

abstract class Generic implements \Zoya\Coin\CoinInterface
{
    const TAILS = 'tails';
    const HEADS = 'heads';
    /**
     * Expected side of coin
     * @var string
     */
    protected $expectedSide;
    /**
     * Counter
     * @var int
     */
    protected $counter = 0;

    /**
     * Whether you are lucky this time
     * @var bool
     */
    protected $isLucky;

    /**
     * @param string $expectedSide
     */
    public function __construct($expectedSide = self::HEADS)
    {
        $this->expectedSide = $expectedSide;
    }

    /**
     * @param $side
     * @return string
     */
    public function getOppositeSide($side)
    {
        return $side === self::TAILS?  self::TAILS : self::HEADS;
    }

    /**
     * Flips the coin and returns its side
     * @return string
     */
    public function flip()
    {
        $this->counter++;
        unset($this->isLucky);
        if ($this->isLucky()) {
            return $this->expectedSide;
        }
        return $this->getOppositeSide($this->expectedSide);
    }

    /**
     * Returns true if you are lucky
     * @return bool
     */
    public function isLucky()
    {
        if (isset($this->isLucky)) {
            return $this->isLucky;
        }
        $this->isLucky = $this->checkLuck();
        return $this->isLucky;
    }

    /**
     * @return mixed
     */
    abstract protected function checkLuck();

}
