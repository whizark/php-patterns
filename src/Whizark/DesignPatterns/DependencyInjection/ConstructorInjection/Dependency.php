<?php
namespace Whizark\DesignPatterns\DependencyInjection\ConstructorInjection;

use Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\DependencyInterface;

/**
 * Class Dependency
 * @package Whizark\DesignPatterns\DependencyInjection\ConstructorInjection
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
