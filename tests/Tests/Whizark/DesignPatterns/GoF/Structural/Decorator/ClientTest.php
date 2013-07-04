<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Decorator;

use Whizark\DesignPatterns\GoF\Structural\Decorator\ConcreteComponent;
use Whizark\DesignPatterns\GoF\Structural\Decorator\ConcreteDecoratorA;
use Whizark\DesignPatterns\GoF\Structural\Decorator\ConcreteDecoratorB;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Decorator
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCaseA()
    {
        $decoratedComponent = new ConcreteDecoratorA(new ConcreteComponent());
        $decoratedComponent->doSomething();
    }

    /**
     * Test an use case.
     */
    public function testAnUseCaseB()
    {
        $decoratedComponent = new ConcreteDecoratorB(new ConcreteComponent());
        $decoratedComponent->doSomething();
    }

    /**
     * Test an use case.
     */
    public function testAnUseCaseC()
    {
        $decoratedComponent = new ConcreteDecoratorA(new ConcreteDecoratorB(new ConcreteComponent()));
        $decoratedComponent->doSomething();
    }
}
