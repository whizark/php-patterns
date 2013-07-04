<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\RefinedAbstractionA;

/**
 * Class RefinedAbstractionATest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class RefinedAbstractionATest extends \PHPUnit_Framework_TestCase
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

        $abstraction = new RefinedAbstractionA($mockedImplementor);
        $abstraction->doSomething();
    }
}
