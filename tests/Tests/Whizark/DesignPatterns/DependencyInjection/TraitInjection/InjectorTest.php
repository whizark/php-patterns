<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\TraitInjection;

use Whizark\DesignPatterns\DependencyInjection\TraitInjection\Dependent;
use Whizark\DesignPatterns\DependencyInjection\TraitInjection\Dependency;

/**
 * Class InjectorTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\TraitInjection
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
