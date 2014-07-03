<?php
namespace Zoya\Coin;

use Symfony\Component\Yaml\Exception\RuntimeException;

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
     * @var
     */
    protected $currentSide;
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

    public function getCurrentSide()
    {
        if (!isset($this->currentSide)) {
            throw new \RuntimeException('Current side is unknown. Flip the coin!');
        }
        return $this->currentSide;
    }

    /**
     * @param $side
     * @return string
     */
    public function getOppositeSide($side)
    {
        return $side === self::TAILS?  self::HEADS : self::TAILS;
    }

    /**
     * Flips the coin and returns its side
     * @return string
     */
    public function flip()
    {
        $this->counter++;
        unset($this->isLucky);
        $this->currentSide = $this->isLucky()? $this->expectedSide : $this->getOppositeSide($this->expectedSide);
        return $this->currentSide;
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
