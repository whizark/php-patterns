<?php
namespace Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\ImplementorInterface;

/**
 * Class ConcreteImplementorB
 * @package Whizark\DesignPatterns\GoF\Structural\Bridge
 */
class ConcreteImplementorB implements ImplementorInterface
{
    /**
     * {@inheritDoc}
     */
    public function implementation()
    {
        // Do something.
    }
}
