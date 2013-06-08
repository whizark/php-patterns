<?php
namespace Whizark\DesignPatterns\Uncategorized\MethodChaining;

/**
 * Class ChainableClass
 * @package Whizark\DesignPatterns\Uncategorized\MethodChaining
 */
class ChainableClass
{
    /**
     * @var null|int
     */
    private $propetyA = null;

    /**
     * @var null|int
     */
    private $propetyB = null;

    /**
     * @var null|int
     */
    private $propetyC = null;

    /**
     * Do something and return this object.
     *
     * @param $arg
     * @return $this
     */
    public function doSomethingA($arg)
    {
        // Do something.
        //
        // For instance, set a property value.
        $this->propetyA = (int) $arg;

        return $this;
    }

    /**
     * Do something and return this object.
     *
     * @param $arg
     * @return $this
     */
    public function doSomethingB($arg)
    {
        // Do something.
        //
        // For instance, set a property value.
        $this->propetyB = (int) $arg;

        return $this;
    }

    /**
     * Do something and return this object.
     *
     * @param $arg
     * @return $this
     */
    public function doSomethingC($arg)
    {
        // Do something.
        //
        // For instance, set a property value.
        $this->propetyC = (int) $arg;

        return $this;
    }

    /**
     * Do something at the end of a chain.
     *
     * @return int
     */
    public function execute()
    {
        // Do something.
        //
        // For instance, calculate and return the sum of the propety values.
        return (int) $this->propetyA +
               (int) $this->propetyB +
               (int) $this->propetyC;
    }
}

