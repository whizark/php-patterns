<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\InterfaceInjection;

use Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\Dependent;

/**
 * Class DependentTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\InterfaceInjection
 */
class DependentTest extends \PHPUnit_Framework_TestCase
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
        $mockedDependency = \Mockery::mock('Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\DependencyInterface');
        $mockedDependency->shouldReceive('doSomething')
                         ->once();

        $dependent = new Dependent();
        $dependent->setDependency($mockedDependency);
        $dependent->doSomething();
    }
}
