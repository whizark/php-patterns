<?php
namespace Whizark\DesignPatterns\DependencyInjection\InterfaceInjection;

use Whizark\DesignPatterns\DependencyInjection\InterfaceInjection\DependencyAwareInterface;

/**
 * Class Dependent
 * @package Whizark\DesignPatterns\DependencyInjection\InterfaceInjection
 */
class Dependent implements DependencyAwareInterface
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
