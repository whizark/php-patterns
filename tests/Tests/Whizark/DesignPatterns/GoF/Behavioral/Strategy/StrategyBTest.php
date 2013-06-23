<?php
namespace Tests\Whizark\DesignPatterns\GoF\Behavioral\Strategy;

use Whizark\DesignPatterns\GoF\Behavioral\Strategy\StrategyB;

/**
 * Class StrategyBTest
 * @package Tests\Whizark\DesignPatterns\GoF\Behavioral\Strategy
 */
class StrategyBTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $strategy = new StrategyB();
        $strategy->doSomething();
    }
}
