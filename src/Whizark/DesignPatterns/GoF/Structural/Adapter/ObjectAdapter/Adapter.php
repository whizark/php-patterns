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
     * 
     * To achieve Dependency Inversion Principle, we need to inject adaptee(s)
     * in the constructor of adapter. This is a key feature.
     */
    public function __construct(AdapteeA $a, AdapteeB $b)
    {
        $this->adapteeA = $a;
        $this->adapteeB = $b;
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
