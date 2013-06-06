<?php
namespace Whizark\DesignPatterns\DependencyInjection\InterfaceInjection;

use Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\DependencyInterface;

/**
 * Class Dependency
 * @package Whizark\DesignPatterns\DependencyInjection\InterfaceInjection
 */
class Dependency implements DependencyInterface
{
    /**
     * {@inheritDoc}
     */
    public function doSomething()
    {
        // Do something.
    }
}
