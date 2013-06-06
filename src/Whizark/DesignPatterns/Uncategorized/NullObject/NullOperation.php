<?php
namespace Whizark\DesignPatterns\Uncategorized\NullObject;

use Whizark\DesignPatterns\Uncategorized\NullObject\OperationInterface;

/**
 * Class NullOperation
 * @package Whizark\DesignPatterns\Uncategorized\NullObject
 */
class NullOperation implements OperationInterface
{
    /**
     * {@inheritDoc}
     */
    public function request()
    {
        // Do nothing, or do something with no side effects.
    }
}
