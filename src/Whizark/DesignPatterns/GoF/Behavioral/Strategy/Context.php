<?php
namespace Whizark\DesignPatterns\GoF\Behavioral\Strategy;

use Whizark\DesignPatterns\GoF\Behavioral\Strategy\StrategyInterface;

/**
 * Class Context
 * @package Whizark\DesignPatterns\GoF\Behavioral\Strategy
 */
class Context
{
    /**
     * @var null|StrategyInterface
     */
    private $strategy = null;

    /**
     * @param StrategyInterface $strategy
     */
    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Do something with the Strategy.
     */
    public function doSomething()
    {
        $this->strategy->doSomething();
    }
}
