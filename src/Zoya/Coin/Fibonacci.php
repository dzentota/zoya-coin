<?php

namespace Zoya\Coin;

/**
 * Class Fibonacci
 * @package Zoya\Coin
 */
class Fibonacci extends Generic
{

    /**
     * Returns n'th Fibonacci number
     * @see https://en.wikipedia.org/wiki/Fibonacci_number
     * @param $n
     * @return int
     */
    public function fib($n)
    {
        if ($n < 3) return 1;
        $k = $n / 2;
        $a = $this->fib($k + 1);
        $b = $this->fib($k);
        if ($n % 2 == 1) {
            return $a * $a + $b * $b;
        } else {
            return $b * (2 * $a - $b);
        }
    }

    /**
     * Return true if $this->counter is Fibonacci number
     * @return bool
     */
    protected function checkLuck()
    {
        $i = 1;
        while (true) {
            $fib = $this->fib($i);
            if ($fib == $this->counter) return true;
            if ($fib > $this->counter) return false;
            $i++;
        }
    }
}
