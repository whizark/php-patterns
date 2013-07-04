<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\RefinedAbstractionB;

/**
 * Class RefinedAbstractionBTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class RefinedAbstractionBTest extends \PHPUnit_Framework_TestCase
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
        $mockedImplementor = \Mockery::mock('Whizark\DesignPatterns\GoF\Structural\Bridge\ImplementorInterface');
        $mockedImplementor->shouldReceive('implementation')
                          ->once();

        $abstraction = new RefinedAbstractionB($mockedImplementor);
        $abstraction->doSomething();
    }
}
