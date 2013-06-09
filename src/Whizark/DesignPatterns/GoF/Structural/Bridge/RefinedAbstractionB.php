<?php
namespace Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\Abstraction;

/**
 * Class RefinedAbstractionB
 * @package Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class RefinedAbstractionB extends Abstraction
{
    /**
     * {@inheritDoc}
     */
    public function doSomething()
    {
        // Do class-specific something.

        // Do something with the implementor.
        $this->implementator->implementation();

        // Do class-specific something.
    }
}
