<?php
namespace Whizark\DesignPatterns\DependencyInjection\ConstructorInjection;

use Whizark\DesignPatterns\DependencyInjection\ConstructorInjection\DependencyInterface;

/**
 * Class Dependent
 * @package Whizark\DesignPatterns\DependencyInjection\ConstructorInjection
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
    public function __construct(DependencyInterface $dependency)
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
