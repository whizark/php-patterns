<?php
namespace Whizark\DesignPatterns\Uncategorized\HookOperation;

use Whizark\DesignPatterns\Uncategorized\HookOperation\HookInterface;

/**
 * Class HookedClass
 * @package Whizark\DesignPatterns\Uncategorized\HookOperation
 */
class HookedClass
{
    /**
     * @var null|HookInterface
     */
    private $hook = null;

    /**
     * @param HookInterface $hook
     */
    public function __construct(HookInterface $hook)
    {
        $this->hook = $hook;
    }

    /**
     * Do something with Hook Operation(s).
     */
    public function doSomething()
    {
        $this->hook->hookOperationA();

        // Do something.

        $this->hook->hookOperationB();
    }
}
