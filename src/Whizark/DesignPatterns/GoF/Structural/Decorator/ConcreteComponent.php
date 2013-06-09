<?php
namespace Whizark\DesignPatterns\GoF\Structural\Decorator;

use Whizark\DesignPatterns\GoF\Structural\Decorator\ComponentInterface;

/**
 * Class ConcreteComponent
 * @package Whizark\DesignPatterns\GoF\Structural\Component
 */
class ConcreteComponent implements ComponentInterface
{
    /**
     * {@inheritDoc}
     */
    public function doSomething()
    {
        // Do something.
    }
}
