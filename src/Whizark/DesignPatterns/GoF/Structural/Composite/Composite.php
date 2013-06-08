<?php
namespace Whizark\DesignPatterns\GoF\Structural\Composite;

use Whizark\DesignPatterns\GoF\Structural\Composite\ComponentInterface;

/**
 * Class Composite
 * @package Whizark\DesignPatterns\GoF\Structural\Composite
 */
class Composite implements ComponentInterface
{
    /**
     * @var null|\SplObjectStorage
     */
    private $children = null;

    /**
     * The constructor.
     */
    public function __construct()
    {
        $this->children = new \SplObjectStorage();
    }

    /**
     * Add a child Component.
     *
     * @param ComponentInterface $component
     */
    public function add(ComponentInterface $component)
    {
        $this->children->attach($component);
    }

    /**
     * Remove a child Component.
     *
     * @param ComponentInterface $component
     */
    public function remove(ComponentInterface $component)
    {
        $this->children->detach($component);
    }

    /**
     * {inheritDoc}
     */
    public function doSomething()
    {
        // Do something.
        //
        // For instance, recursively do something for all the children.
        foreach ($this->children as $child) {
            $child->doSomething();
        }
    }
}
