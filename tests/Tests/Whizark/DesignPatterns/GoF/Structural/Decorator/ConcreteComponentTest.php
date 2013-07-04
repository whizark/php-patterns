<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Decorator;

use Whizark\DesignPatterns\GoF\Structural\Decorator\ConcreteComponent;

/**
 * Class ConcreteComponentTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Decorator
 */
class ConcreteComponentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $component = new ConcreteComponent();
        $component->doSomething();
    }
}
