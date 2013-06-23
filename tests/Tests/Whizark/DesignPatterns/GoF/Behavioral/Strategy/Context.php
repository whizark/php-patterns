<?php
namespace Tests\Whizark\DesignPatterns\GoF\Behavioral\Strategy;

use Whizark\DesignPatterns\GoF\Behavioral\Strategy\Context;

/**
 * Class ContextTest
 * @package Tests\Whizark\DesignPatterns\GoF\Behavioral\Strategy
 */
class ContextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Clean up object(s).
     */
    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $mockedStrategy = \Mockery::mock('Whizark\DesignPatterns\GoF\Behavioral\Strategy\StrategyInterface');

        $mockedStrategy->shouldReceive('doSomething')
                       ->once();

        $context = new Context($mockedStrategy);
        $context->doSomething();
    }
}
