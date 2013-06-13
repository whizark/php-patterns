<?php
namespace Tests\Whizark\DesignPatterns\DependencyInjection\ConstructorInjection;

use Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\Dependent;
use Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\Dependency;

/**
 * Class InjectorTest
 * @package Tests\Whizark\DesignPatterns\DependencyInjection\ConstructorInjection
 */
class InjectorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $dependent = new Dependent(new Dependency());
        $dependent->doSomething();
    }
}
