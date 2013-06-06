<?php
namespace Whizark\DesignPatterns\DependencyInjection\TraitInjection;

use Whizark\DesignPatterns\DependencyInjection\TraitInjection\DependencyInterface;

/**
 * Trait DependencyAwareTrait
 * @package Whizark\DesignPatterns\DependencyInjection\TraitInjection
 */
trait DependencyAwareTrait
{
    /**
     * @var null|DependencyInterface
     */
    private $dependency = null;

    /**
     * Set a dependency.
     *
     * @param DependencyInterface $dependency
     */
    public function setDependency(DependencyInterface $dependency)
    {
        $this->dependency = $dependency;
    }
}
