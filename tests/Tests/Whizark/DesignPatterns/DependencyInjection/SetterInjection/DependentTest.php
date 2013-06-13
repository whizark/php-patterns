<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\SetterInjection;

use Whizark\DesignPatterns\DependencyInjection\SetterInjection\Dependent;

/**
 * Class DependentTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\SetterInjection
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
        $mockedDependency = \Mockery::mock('Whizark\DesignPatterns\DependencyInjection\SetterInjection\DependencyInterface');
        $mockedDependency->shouldReceive('doSomething')
                         ->once();

        $dependent = new Dependent();
        $dependent->setDependency($mockedDependency);
        $dependent->doSomething();
    }
}
