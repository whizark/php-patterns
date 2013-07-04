<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\ConcreteImplementorA;
use Whizark\DesignPatterns\GoF\Structural\Bridge\ConcreteImplementorB;
use Whizark\DesignPatterns\GoF\Structural\Bridge\RefinedAbstractionA;
use Whizark\DesignPatterns\GoF\Structural\Bridge\RefinedAbstractionB;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCaseA()
    {
        $abstraction = new RefinedAbstractionA(new ConcreteImplementorA());
        $abstraction->doSomething();
    }

    /**
     * Test an use case.
     */
    public function testAnUseCaseB()
    {
        $abstraction = new RefinedAbstractionA(new ConcreteImplementorB());
        $abstraction->doSomething();
    }

    /**
     * Test an use case.
     */
    public function testAnUseCaseC()
    {
        $abstraction = new RefinedAbstractionB(new ConcreteImplementorA());
        $abstraction->doSomething();
    }

    /**
     * Test an use case.
     */
    public function testAnUseCaseD()
    {
        $abstraction = new RefinedAbstractionB(new ConcreteImplementorB());
        $abstraction->doSomething();
    }
}
