<?php
namespace Whizark\DesignPatterns\DependencyInjection\InterfaceInjection;

/**
 * Interface DependencyAwareInterface
 * @package Whizark\DesignPatterns\DependencyInjection\InterfaceInjection
 */
interface DependencyAwareInterface
{
    /**
     * Set a dependency.
     *
     * @param DependencyInterface $dependency
     * @return void
     */
    public function setDependency(DependencyInterface $dependency);
}
