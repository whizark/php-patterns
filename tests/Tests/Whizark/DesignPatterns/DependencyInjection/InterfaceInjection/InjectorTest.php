<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\InterfaceInjection;

use Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\Dependent;
use Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\Dependency;

/**
 * Class InjectorTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\InterfaceInjection
 */
class InjectorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $dependent = new Dependent();
        $dependent->setDependency(new Dependency());
        $dependent->doSomething();
    }
}
