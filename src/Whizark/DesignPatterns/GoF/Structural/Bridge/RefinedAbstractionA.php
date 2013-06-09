<?php
namespace Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\Abstraction;

/**
 * Class RefinedAbstractionA
 * @package Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class RefinedAbstractionA extends Abstraction
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
