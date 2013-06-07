<?php
namespace Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter;

use Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter\TargetInterface;
use Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter\AdapteeA;
use Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter\AdapteeB;

/**
 * Class Adapter
 * @package Whizark\DesignPatterns\GoF\Structural\Adapter\ObjectAdapter
 */
class Adapter implements TargetInterface
{
    /**
     * @var null|AdapteeA
     */
    private $adapteeA = null;

    /**
     * @var null|AdapteeB
     */
    private $adapteeB = null;

    /**
     * The constructor.
     */
    public function __construct()
    {
        $this->adapteeA = new AdapteeA();
        $this->adapteeB = new AdapteeB();
    }

    /**
     * {@inheritDoc}
     */
    public function targetMethod()
    {
        // Adapt adaptee method(s) to the target interface.
        $this->adapteeA->adapteeMethod();
        $this->adapteeB->adapteeMethod();
    }
}
