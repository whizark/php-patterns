<?php
namespace Whizark\DesignPatterns\GoF\Structural\Bridge;

use Whizark\DesignPatterns\GoF\Structural\Bridge\ImplementorInterface;

/**
 * Class Abstraction
 * @package Whizark\DesignPatterns\GoF\Structural\Bridge
 */
abstract class Abstraction
{
    /**
     * @var null|ImplementorInterface
     */
    protected $implementator = null;

    /**
     * @param ImplementorInterface $implementator
     */
    public function __construct(ImplementorInterface $implementator)
    {
        $this->implementator = $implementator;
    }

    /**
     * Do something with the implementor.
     */
    abstract public function doSomething();
}
