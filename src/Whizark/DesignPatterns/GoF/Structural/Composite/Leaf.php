<?php
namespace Whizark\DesignPatterns\GoF\Structural\Composite;

use Whizark\DesignPatterns\GoF\Structural\Composite\ComponentInterface;

/**
 * Class Leaf
 * @package Whizark\DesignPatterns\GoF\Structural\Composite
 */
class Leaf implements ComponentInterface
{
    /**
     * {@inheritDoc}
     */
    public function doSomething()
    {
        // Do something.
    }
}
