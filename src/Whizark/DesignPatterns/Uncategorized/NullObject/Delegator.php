<?php
namespace Whizark\DesignPatterns\Uncategorized\NullObject;

use Whizark\DesignPatterns\Uncategorized\NullObject\OperationInterface;

/**
 * Class Delegator
 * @package Whizark\DesignPatterns\Uncategorized\NullObject
 */
class Delegator
{
    /**
     * @var null|OperationInterface
     */
    private $operation = null;

    /**
     * @param OperationInterface $operation
     */
    public function __construct(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    /**
     * Do something with the dependency.
     */
    public function doSomething()
    {
        $this->operation->request();
    }
}
