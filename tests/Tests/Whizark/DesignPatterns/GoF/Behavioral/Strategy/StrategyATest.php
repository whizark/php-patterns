<?php
namespace Tests\Whizark\DesignPatterns\GoF\Behavioral\Strategy;

use Whizark\DesignPatterns\GoF\Behavioral\Strategy\StrategyA;

/**
 * Class StrategyATest
 * @package Tests\Whizark\DesignPatterns\GoF\Behavioral\Strategy
 */
class StrategyATest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $strategy = new StrategyA();
        $strategy->doSomething();
    }
}
