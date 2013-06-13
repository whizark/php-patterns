<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\ConstructorInjection;

use Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\Dependent;

/**
 * Class DependentTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\ConstructorInjection
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
        $mockedDependency = \Mockery::mock('Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\DependencyInterface');
        $mockedDependency->shouldReceive('doSomething')
                         ->once();

        $dependent = new Dependent($mockedDependency);
        $dependent->doSomething();
    }
}
