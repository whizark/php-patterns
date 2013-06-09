<?php
namespace Whizark\DesignPatterns\GoF\Structural\Decorator;

use Whizark\DesignPatterns\GoF\Structural\Decorator\Decorator;

/**
 * Class ConcreteDecoratorA
 * @package Whizark\DesignPatterns\GoF\Structural\Component
 */
class ConcreteDecoratorA extends Decorator
{
    /**
     * {@inheritDoc}
     */
    public function doSomething()
    {
        // Do class-specific something
        // to attach additional responsibilities to the original Component.

        $this->component->doSomething();

        // Do class-specific something
        // to attach additional responsibilities to the original Component.
    }
}
