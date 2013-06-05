<?php
namespace Whizark\DesignPatterns\DependencyInjection\SetterInjection;

use Whizark\DesignPatterns\DependencyInjection\SetterInjection\DependencyInterface;

/**
 * Class Dependent
 * @package Whizark\DesignPatterns\DependencyInjection\SetterInjection
 */
class Dependent
{
    /**
     * @var null|DependencyInterface
     */
    private $dependency = null;

    /**
     * @param DependencyInterface $dependency
     */
    public function setDependency(DependencyInterface $dependency)
    {
        $this->dependency = $dependency;
    }

    /**
     * Do something with the dependency.
     */
    public function doSomething()
    {
        $this->dependency->doSomething();
    }
}
