<?php
namespace Whizark\DesignPatterns\DependencyInjection\SetterInjection;

use Whizark\DesignPatterns\DependencyInjection\SetterInjection\DependencyInterface;

/**
 * Class Dependency
 * @package Whizark\DesignPatterns\DependencyInjection\SetterInjection
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
