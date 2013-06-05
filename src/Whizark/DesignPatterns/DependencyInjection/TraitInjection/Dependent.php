<?php
namespace Whizark\DesignPatterns\DependencyInjection\TraitInjection;

use Whizark\DesignPatterns\DependencyInjection\TraitInjection\DependencyAwareTrait;

/**
 * Class Dependent
 * @package Whizark\DesignPatterns\DependencyInjection\TraitInjection
 */
class Dependent
{
    use DependencyAwareTrait;

    /**
     * Do something with the dependency.
     */
    public function doSomething()
    {
        $this->dependency->doSomething();
    }
}
