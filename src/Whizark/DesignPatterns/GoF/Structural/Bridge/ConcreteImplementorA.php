<?php
namespace Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\ImplementorInterface;

/**
 * Class ConcreteImplementorA
 * @package Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class ConcreteImplementorA implements ImplementorInterface
{
    /**
     * {@inheritDoc}
     */
    public function implementation()
    {
        // Do something.
    }
}
