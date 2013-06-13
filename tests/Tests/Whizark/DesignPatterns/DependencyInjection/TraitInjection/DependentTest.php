<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\TraitInjection;

use Whizark\DesignPatterns\DependencyInjection\TraitInjection\Dependent;

/**
 * Class DependentTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\TraitInjection
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
        $mockedDependency = \Mockery::mock('Whizark\DesignPatterns\DependencyInjection\TraitInjection\DependencyInterface');
        $mockedDependency->shouldReceive('doSomething')
                         ->once();

        $dependent = new Dependent();
        $dependent->setDependency($mockedDependency);
        $dependent->doSomething();
    }
}
