<?php
namespace Whizark\DesignPatterns\Uncategorized\HookOperation;

use Whizark\DesignPatterns\Uncategorized\HookOperation\HookInterface;

/**
 * Class Hook
 * @package Whizark\DesignPatterns\Uncategorized\HookOperation
 */
class Hook implements HookInterface
{
    /**
     * {@inheritDoc}
     */
    public function hookOperationA()
    {
        // Do something.
    }

    /**
     * {@inheritDoc}
     */
    public function hookOperationB()
    {
        // Do something.
    }
}
