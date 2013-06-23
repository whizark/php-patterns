<?php
namespace Tests\Whizark\DesignPatterns\GoF\Behavioral\Strategy;

use Whizark\DesignPatterns\GoF\Behavioral\Strategy\Context;
use Whizark\DesignPatterns\GoF\Behavioral\Strategy\StrategyA;
use Whizark\DesignPatterns\GoF\Behavioral\Strategy\StrategyB;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Behavioral\Strategy
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCaseA()
    {
        $contextA = new Context(new StrategyA());
        $contextA->doSomething();
    }

    /**
     * Test an use case.
     */
    public function testAnUseCaseB()
    {
        $contextB = new Context(new StrategyB());
        $contextB->doSomething();
    }
}
