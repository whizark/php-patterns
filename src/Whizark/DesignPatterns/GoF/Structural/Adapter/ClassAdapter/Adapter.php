<?php
namespace Whizark\DesignPatterns\GoF\Structural\Adapter\ClassAdapter;

use Whizark\DesignPatterns\GoF\Structural\Adapter\ClassAdapter\TargetInterface;
use Whizark\DesignPatterns\GoF\Structural\Adapter\ClassAdapter\Adaptee;

/**
 * Class Adapter
 * @package Whizark\DesignPatterns\GoF\Structural\Adapter\ClassAdapter
 */
class Adapter extends Adaptee implements TargetInterface
{
    /**
     * {@inheriDoc}
     */
    public function targetMethod()
    {
        // Adapt adaptee method(s) to the target interface.
        $this->adapteeMethod();
    }
}
