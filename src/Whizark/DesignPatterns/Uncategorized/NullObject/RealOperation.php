<?php
namespace Whizark\DesignPatterns\Uncategorized\NullObject;

use Whizark\DesignPatterns\Uncategorized\NullObject\OperationInterface;

/**
 * Class RealOperation
 * @package Whizark\DesignPatterns\Uncategorized\NullObject
 */
class RealOperation implements OperationInterface
{
    /**
     * {@inheritDoc}
     */
    public function request()
    {
        // Do something.
    }
}
