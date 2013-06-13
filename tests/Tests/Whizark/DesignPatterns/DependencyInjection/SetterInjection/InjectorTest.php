<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\SetterInjection;

use Whizark\DesignPatterns\DependencyInjection\SetterInjection\Dependent;
use Whizark\DesignPatterns\DependencyInjection\SetterInjection\Dependency;

/**
 * Class InjectorTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\SetterInjection
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
